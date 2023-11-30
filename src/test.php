<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyBestCV";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM applicants";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $json = json_encode($data, true);
    echo $json;
} else {
    echo "No Result found";
}

$conn->close();





// $data = '{
//     "name": "John Doe",
//     "email": ["johndoe@e.c","john@a.c"],
//     "phone": ["123456789","987654321"],
//     "university": [
//         {
//         "uniName": "University of Life",
//         "uniCourse": "Computer Science",
//         "uniTime": "2010-2014",
//         "uniAchievements": ["First", "Second", "Third"]
//         },
//         {
//         "uniName": "University of North",
//         "uniCourse": "Computer Engineering",
//         "uniTime": "2014-2018",
//         "uniAchievements": ["First", "Second", "Third"]
//         }
//     ],
//     "Certificates": [
//         {
//         "certName": "PHP",
//         "certTime": "2015-2016"
//         },
//         {
//         "certName": "JavaScript",
//         "certTime": "2016-2017"
//         }
//     ],
//     "techSkills": ["PHP", "HTML", "CSS", "JavaScript"],
//     "experiences": [
//         {
//             "companyName": "Company 1",
//             "companyTime": "2016-2017",
//             "companyPosition": "Web Developer",
//             "companyLocation": "London",
//             "companyDescription": "Lorem ipsum"
//         },
//         {
//             "companyName": "Company 2",
//             "companyTime": "2017-2018",
//             "companyPosition": "Web Developer",
//             "companyLocation": "New York",
//             "companyDescription": "Lorum ipsem"
//         }
//     ]
//   }';

$decoded = json_decode($json, true);
var_dump($decoded);