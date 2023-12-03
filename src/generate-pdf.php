<?php
require dirname(__DIR__) . "/vendor/autoload.php";
include_once "../database/db_connection.php";

include_once "displayFunctions.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4", "portrait");

// $sql = file_get_contents("../database/sqlstatement.sql");
$sql = "select 
company_name as companyName,
position as companyPosition,
duration as companyTime,
tasks as companyDescription
from working_history where user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$experiences = [];
while ($row = $result->fetch_assoc()) {
    $experiences[] = $row;
}

$html = file_get_contents("harvardCVtemplate.html");

$html = str_replace(
    [
//         "{{ displayName }}",
//         "{{ displayEmail }}",
//         "{{ displayPhone }}",
//         "{{ displayUniversityInfo }}",
//         "{{ displayTechSkills }}",
//         "{{ displayCertifications }}",
        "{{ displayExperiences }}"
    ],
    [
//         displayName($decodedData),
//         displayEmail($decodedData),
//         displayPhone($decodedData),
//         displayUniversityInfo(json_decode($decodedData['university'], true)),
//         displayTechSkills(json_decode($decodedData['techSkills'], true)),
//         displayCertifications(json_decode($decodedData['certificates'], true)),
        displayExperiences($experiences)
    ],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);