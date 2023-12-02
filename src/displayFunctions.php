<?php
function displayName($data) {
    return $data['name'];
}
function displayEmail($data) {
    $result = '';
    if (is_array($data['email'])) {
        foreach ($data['email'] as $email) {
            $result .= '<li>' . $email . '</li>';
        }
    } else {
        $result .= '<li>' . $data['email'] . '</li>';
    }
    return $result;
}
function displayPhone($data) {
    $result = '';
    if (is_array($data['phone'])) {
        foreach ($data['phone'] as $phone) {
            $result .= '<li>' . $phone . '</li>';
        }
    } else {
        $result .= '<li>' . $data['phone'] . '</li>';
    }
    return $result;
}
function displayUniversityInfo($data) {
    $result = '';
    foreach ($data['university'] as $university) {
        $result .= 
        '<div>
            <table>
                <tr>
                    <td style="font-weight: bold; text-align: left;"> ' . $university['uniName'] . ' </td>
                </tr>
                <tr>
                    <td>' . $university['uniCourse'] . '</td>
                    <td>' . $university['uniTime'] . '</td>
                </tr>
            </table>
            <ul style="margin-top: 0px;">';
        
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
        $result .= 
        '<li>
            <table>
                <tr>
                    <td>' . $certification['certName'] . '</td>
                    <td>' . $certification['certTime'] . '</td>
                </tr>
            </table>
        </li>';
    }
    $result .= '</ul>';
    return $result;
}
function displayExperiences($data) {
    $result = '';
    foreach ($data['experiences'] as $experience) {
        $result .= 
        '<div>
            <table>
                <tr>
                    <td style="font-weight: bold">' . $experience['companyName'] . '</td>
                    <td>' . $experience['companyLocation'] . '</td>
                </tr>
                <tr>
                    <td>' . $experience['companyPosition'] . '</td>
                    <td>' . $experience['companyTime'] . '</td>
                </tr>
            </table>
            <p style="margin-top: 0px;">' . $experience['companyDescription'] . '</p>
        </div>';
    }
    return $result;
}