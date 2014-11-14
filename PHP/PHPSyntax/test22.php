<?php
$fName="Dani";
$lName="Stanisheva";
$email="dast@abv.bg";
$company="Trega Ltd";
$phone="+359 0887 71 90 71";
$gender="famale";
$birthDate="04.05.1969";
$nationality="bulgarian";
 
if(preg_match('/^[A-Za-z]{2,20}$/', $fName) 
            && preg_match('/^[A-Za-z]{2,20}$/', $lName) 
            && preg_match('/^[A-Za-z0-9 ]{2,20}$/', $company) 
            && preg_match("/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z0-9]+$/", $email) 
            && preg_match('/[0-9\+\- ]+/', $phone) ) {
        
         $personalInfoTable = '<table><tbody><tr><th colspan="2">Personal Information</th></tr>' .
                               "<tr><td>First Name</td><td>$fName</td></tr>" .
                               "<tr><td>Last Name</td><td>$lName</td></tr>".
                               "<tr><td>Email</td><td>$email</td></tr>" .
                               "<tr><td>Phone Number</td><td>$phone</td></tr>" .
                               "<tr><td>Gender</td><td>$gender</td></tr>" .
                               "<tr><td>Birth date</td><td>$birthDate</td></tr>" .
                               "<tr><td>Nationality</td><td>$nationality</td></tr></tbody></table>";
        echo $personalInfoTable;
            }
?>
 if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pnumber']) &&
isset($_POST['gender']) && isset($_POST['bday']) && isset($_POST['nationality']) && isset($_POST['compname']) && isset($_POST['from']) &&
isset($_POST['to']) && isset($_POST['progrL']) && isset($_POST['comprehension']) && isset($_POST['reading']) &&
isset($_POST['writing'])) {
