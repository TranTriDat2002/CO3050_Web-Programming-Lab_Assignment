<?php
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
        "certName": "PHP",
        "certTime": "2015-2016"
        },
        {
        "certName": "JavaScript",
        "certTime": "2016-2017"
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

$decoded = json_decode($data, true);
var_dump($decoded);