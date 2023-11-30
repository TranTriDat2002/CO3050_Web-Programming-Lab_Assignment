<?php
require dirname(__DIR__) . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineStore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM applicants WHERE applicant_id = 1001 limit 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row["fullname"];
    $email = $row["email"];
    $phone = $row["phone_number"];
} else {
    echo "No Result found";
}

$conn->close();



// $name = $_POST["fullname"];
// $email = $_POST["email"];
// $phone = $_POST["phone_number"];
// $name = "John Doe";
// $email = "johndoe@e.c";
// $phone = "123456789";

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4", "portrait");

$html = file_get_contents("harvardCVtemplate.html");

$html = str_replace(
    [
        "{{ name }}",
        "{{ email }}",
        "{{ phone }}"
    ],
    [$name, $email, $phone],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);