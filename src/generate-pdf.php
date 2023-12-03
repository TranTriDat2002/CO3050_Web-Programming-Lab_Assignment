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

// Fetch name
$sql = "select CONCAT(u.firstname, ' ', u.lastname) as name from users u where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();
$Name = $result->fetch_assoc()["name"];

// Fetch email
$sql = "select 
email as email
from users where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$emails = [];
while ($row = $result->fetch_assoc()) {
    $emails[] = $row;
}


// Fetch phone
$sql = "select
phone as phone
from users where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$phones = [];
while ($row = $result->fetch_assoc()) {
    $phones[] = $row;
}

// Fetch universities
$sql = "select
school as uniName,
major as uniCourse,
year as uniTime,
gpa as uniGPA,
degree as uniDegree
from education where user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$universities = [];
while ($row = $result->fetch_assoc()) {
    $universities[] = $row;
}

// Fetch skills
$sql = "select
skill as skillName
from skill where user_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$skills = [];
while ($row = $result->fetch_assoc()) {
    $skills[] = $row;
}


// Fetch certifications
$sql = "select
title as certName,
organization as certOrg,
obtained_date as certTime
from certificate where user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$certifications = [];
while ($row = $result->fetch_assoc()) {
    $certifications[] = $row;
}

// Fetch experiences
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
        displayEmail($emails),
        displayPhone($phones),
        displayUniversityInfo($universities),
        displayTechSkills($skills),
        displayCertifications($certifications),
        displayExperiences($experiences)
    ],
    $html
);

$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream("Curriculum Vitae.pdf", ["Attachment" => 0]);