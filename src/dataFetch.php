<?php
include_once "../database/db_connection.php";

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

$Emails = [];
while ($row = $result->fetch_assoc()) {
    $Emails[] = $row;
}

// Fetch phone
$sql = "select
phone as phone
from users where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$Phones = [];
while ($row = $result->fetch_assoc()) {
    $Phones[] = $row;
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

$Universities = [];
while ($row = $result->fetch_assoc()) {
    $Universities[] = $row;
}

// Fetch skills
$sql = "select
skill as skillName
from skill where user_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();

$Skills = [];
while ($row = $result->fetch_assoc()) {
    $Skills[] = $row;
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

$Certificates = [];
while ($row = $result->fetch_assoc()) {
    $Certificates[] = $row;
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

$Experiences = [];
while ($row = $result->fetch_assoc()) {
    $Experiences[] = $row;
}