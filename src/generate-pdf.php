<?php
require dirname(__DIR__) . "/vendor/autoload.php";

include_once "displayFunctions.php";
include_once "dataFetch.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4", "portrait");


$html = file_get_contents("harvardCVtemplate.html");
$html = str_replace(
    [
        "{{ displayName }}",
        "{{ displayEmail }}",
        "{{ displayPhone }}",
        "{{ displayUniversityInfo }}",
        "{{ displayTechSkills }}",
        "{{ displayCertifications }}",
        "{{ displayExperiences }}"
    ],
    [
        displayName($Name),
        displayEmail($Emails),
        displayPhone($Phones),
        displayUniversityInfo($Universities),
        displayTechSkills($Skills),
        displayCertificates($Certificates),
        displayExperiences($Experiences)
    ],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);