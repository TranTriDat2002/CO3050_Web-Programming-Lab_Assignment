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

$sql = file_get_contents("../database/sqlstatement.sql");
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$data = $result->fetch_assoc();
foreach ($data['university'] as ) {
    if (is_string($uni)) {
        echo "yes";
    } else {
        echo "no";
    }
}
// var_dump($data['university']);

// $html = file_get_contents("harvardCVtemplate.html");

// $html = str_replace(
//     [
//         "{{ displayName }}",
//         "{{ displayEmail }}",
//         "{{ displayPhone }}",
//         "{{ displayUniversityInfo }}",
//         "{{ displayTechSkills }}",
//         "{{ displayCertifications }}",
//         "{{ displayExperiences }}"
//     ],
//     [
//         displayName($decodedData),
//         displayEmail($decodedData),
//         displayPhone($decodedData),
//         displayUniversityInfo(json_decode($decodedData['university'], true)),
//         displayTechSkills(json_decode($decodedData['techSkills'], true)),
//         displayCertifications(json_decode($decodedData['certificates'], true)),
//         displayExperiences(json_decode($decodedData['experiences'], true))
//     ],
//     $html
// );

// $dompdf->loadHtml($html);

// $dompdf->render();
// $dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);