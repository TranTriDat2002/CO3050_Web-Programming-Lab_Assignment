<?php
require dirname(__DIR__) . "/vendor/autoload.php";
include_once "displayFunctions.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$dompdf->setPaper("A4", "portrait");

//simulate data from database as json
$data = '{
    "name": "John Doe",
    "email": ["johndoe@e.c","john@a.c"],
    "phone": ["123456789","987654321"],
    "university": [
        {
        "uniName": "University of Life",
        "uniCourse": "Computer Science",
        "uniTime": "2010-2014",
        "uniAchievements": ["First", "Second", "Third"]
        },
        {
        "uniName": "University of North",
        "uniCourse": "Computer Engineering",
        "uniTime": "2014-2018",
        "uniAchievements": ["First", "Second", "Third"]
        }
    ],
    "Certificates": [
        {
            "certName": "Certificate 1",
            "certTime": "2016"
        },
        {
            "certName": "Certificate 2",
            "certTime": "2017"
        }
    ],
    "techSkills": ["PHP", "HTML", "CSS", "JavaScript"],
    "experiences": [
        {
            "companyName": "Company 1",
            "companyTime": "2016-2017",
            "companyPosition": "Web Developer",
            "companyLocation": "London",
            "companyDescription": "Lorem ipsum"
        },
        {
            "companyName": "Company 2",
            "companyTime": "2017-2018",
            "companyPosition": "Web Developer",
            "companyLocation": "New York",
            "companyDescription": "Lorum ipsem"
        }
    ]
  }';
$decodedData = json_decode($data, true);

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
        displayName($decodedData),
        displayEmail($decodedData),
        displayPhone($decodedData),
        displayUniversityInfo($decodedData),
        displayTechSkills($decodedData),
        displayCertifications($decodedData),
        displayExperiences($decodedData)
    ],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);