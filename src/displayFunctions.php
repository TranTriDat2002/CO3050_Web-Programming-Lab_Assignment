<?php
function displayName($data) {
    return $data['name'];
}
function displayEmail($data) {
    $result = '';
    if (is_array($data['email'])) {
        foreach ($data['email'] as $email) {
            $result .= $email . ', ';
        }
    } else {
        $result .= $data['email'];
    }
    return $result;
}
function displayPhone($data) {
    $result = '';
    if (is_array($data['phone'])) {
        foreach ($data['phone'] as $phone) {
            $result .= $phone . ', ';
        }
    } else {
        $result .= $data['phone'];
    }
    return $result;
}
function displayUniversityInfo($data) {
    $result = '';
    foreach ($data['university'] as $university) {
        $result .= '<div>
                <h3>' . $university['uniName'] . '</h3>
                <span style="float: left">' . $university['uniCourse'] . '</span>
                <span style="float: right">' . $university['uniTime'] . '</span>
                <br />
                <ul>';
        
        foreach ($university['uniAchievements'] as $achievement) {
            $result .= '<li>' . $achievement . '</li>';
        }

        $result .= '</ul></div>';
    }
    return $result;
}
function displayTechSkills($data) {
    $result = '';
    $result .= '<ul>';
    foreach ($data['techSkills'] as $techSkill) {
        $result .= '<li>' . $techSkill . '</li>';
    }
    $result .= '</ul>';
    return $result;
}
function displayCertifications($data) {
    $result = '';
    $result .= '<ul>';
    foreach ($data['Certificates'] as $certification) {
        $result .= '<li>
                <span style="float: left">' . $certification['certName'] . '</span>
                <span style="float: right">' . $certification['certTime'] . '</span>
              </li>';
    }
    $result .= '</ul>';
    return $result;
}
function displayExperiences($data) {
    $result = '';
    foreach ($data['experiences'] as $experience) {
        $result .= '<div>
                <span style="float: left; font-weight: bold">' . $experience['companyName'] . '</span>
                <span style="float: right">' . $experience['companyLocation'] . '</span>
                <br />
                <span style="float: left">' . $experience['companyPosition'] . '</span>
                <span style="float: right">' . $experience['companyTime'] . '</span>
                <br />
                <p>' . $experience['companyDescription'] . '</p>
              </div>';
    }
    return $result;
}