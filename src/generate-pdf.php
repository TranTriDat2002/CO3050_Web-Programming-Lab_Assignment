<?php
require dirname(__DIR__) . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;






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