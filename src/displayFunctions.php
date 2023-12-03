<?php
function displayName($data)
{
    return $data;
}
function displayEmail($data)
{
    $result = '';

    foreach ($data as $email) {
        $result .=
            '<li>
            <img 
            src="email.png" 
            alt="" 
            style="padding-right: 5px; padding-bottom: 0px; margin-bottom: -3px">'
            . $email['email'] .
            '</li>';
    }
    return $result;


}
function displayPhone($data)
{
    $result = '';

    foreach ($data as $phone) {
        $result .=
            '<li>
            <img 
            src="phone.png" 
            alt="" 
            style="padding-right: 0px; padding-bottom: 0px; margin-bottom: -3px">
            '
            . $phone['phone'] .
            '</li>';
    }

    return $result;
}
function displayUniversityInfo($data)
{
    $result = '';
    foreach ($data as $university) {
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
        $result .= '<li> Degree: ' . $university['uniDegree'] . '</li>';
        $result .= '<li> GPA: ' . $university['uniGPA'] . '</li>';
        $result .= '</ul></div>';
    }
    return $result;
}
function displayTechSkills($data)
{
    $result = '';
    $result .= '<ul>';
    foreach ($data as $techSkill) {
        $result .= '<li>' . $techSkill['skillName'] . '</li>';
    }
    $result .= '</ul>';
    return $result;
}
function displayCertificates($data)
{
    $result = '';
    $result .= '<ul>';
    foreach ($data as $certification) {
        $result .=
            '<li>
            <table>
                <tr>
                    <td>' . $certification['certName'] . '</td>
                    <td>' . $certification['certTime'] . '</td>
                </tr>
                <tr>
                    <td style="text-align: left; font-style: italic;">' . $certification['certOrg'] . '</td>
                </tr>
            </table>
        </li>';
    }
    $result .= '</ul>';
    return $result;
}
function displayExperiences($data)
{
    $result = '';
    foreach ($data as $experience) {
        $result .=
            '<div>
            <table>
                <tr>
                    <td style="font-weight: bold; text-align: left;">' . $experience['companyName'] . '</td>
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