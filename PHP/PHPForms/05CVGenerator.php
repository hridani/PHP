<!DOCTYPE html>
<?php
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pnumber']) &&
            isset($_POST['gender']) && isset($_POST['bday']) && isset($_POST['nationality']) ) {
        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['pnumber'];
        $gender = $_POST['gender'];
        $birthDate = $_POST['bday'];
        $nationality = $_POST['nationality'];
    
        if(preg_match('/^[A-Za-z]{2,20}$/', $fName) 
            && preg_match('/^[A-Za-z]{2,20}$/', $lName) 
            && preg_match("/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z0-9]+$/", $email) 
            && preg_match('/[0-9\+\- ]+/', $phone) ) {
                 $personalInfoTable = '<table><thead><tr><th colspan="2">Personal Information</th></tr><thead' .
                               "<tr><td>First Name</td><td>$fName</td></tr>" .
                               "<tr><td>Last Name</td><td>$lName</td></tr>".
                               "<tr><td>Email</td><td>$email</td></tr>" .
                               "<tr><td>Phone Number</td><td>$phone</td></tr>" .
                               "<tr><td>Gender</td><td>$gender</td></tr>" .
                               "<tr><td>Birth date</td><td>$birthDate</td></tr>" .
                               "<tr><td>Nationality</td><td>$nationality</td></tr></table><br/>";
                               
         }      
         }
        if(isset($_POST['compname']) && isset($_POST['from']) && isset($_POST['to'])) {
            $company = $_POST['compname'];
            $workedFrom = $_POST['from'];
            $workedTo = $_POST['to'];
            if( preg_match('/^[A-Za-z0-9 ]{2,20}$/', $company) ){
             $lastWorkTable = '<table><thead> <tr><th colspan="2">Last Work Position</th></tr><thead>' .
                               "<tr><td>Company Name</td><td>$company</td></tr>" .
                               "<tr><td>From</td><td>$workedFrom</td></tr>" . 
                               "<tr><td>To</td><td>$workedTo</td></tr></table></br>";
                              
           }
           
        }
        
        if(isset($_POST['progrL']) ) {
            $programmingLanguage = $_POST['progrL'];
            $levelProgramming = $_POST['level'];
            $computerSkillsTable = '<table><thead><tr><th colspan="2">Computer Skills</th></tr></thead><tbody>' .
                                    '<tr><td>Programming Languages</td><td><table>
                                    <tr><th>Language</th><th>Skill Level</th></tr></thead>' .
                                    '<tbody>';
                                    for($i = 0; $i < count($levelProgramming) ;$i++)  {
                                        $computerSkillsTable .= '<tr>';
                                        $computerSkillsTable .= '<td>' .$programmingLanguage[$i] . '</td>';
                                        $computerSkillsTable .= '<td>' . $levelProgramming[$i] . '</td>';
                                        $computerSkillsTable .= '</tr>';
                                    }
                                    $computerSkillsTable .= '</tbody></table></tr></tbody></table></br>';
                                   
        }

        if(isset($_POST['comprehension']) && isset($_POST['reading']) && isset($_POST['writing'])) {
        
            $speakingLanguages = $_POST['lang'];
            $comprehension = $_POST['comprehension'];
            $reading = $_POST['reading'];
            $writing = $_POST['writing'];
            $B = ''; $C= ''; $A = '';
            if(isset($_POST['B'])) {
                $B= $_POST['B'];
            }
            if(isset($_POST['A'])) {
            $A = $_POST['A'];
            }
            if(isset($_POST['C'])) {
            $C = $_POST['C'];
            }
             
            $otherSkills = '<table><thead><tr><th colspan="2">Other Skills</th></tr></thead><tbody>' .
                        '<tr><td>Languages</td><td><table><thead><th>Language</th><th>Comprehension</th>' .
                        '<th>Reading</th><th>Writing</th></tr>';
                        for($i = 0; $i < count($comprehension) ;$i++) {
                                if(preg_match('/^[A-Za-z]{2,20}$/', $speakingLanguages[$i] )){
                                            $otherSkills .= '<tr>';
                                            $otherSkills .= '<td>' . $speakingLanguages[$i] . '</td>';
                                            $otherSkills .= '<td>' . $comprehension[$i] . '</td>';
                                            $otherSkills .= '<td>' . $reading[$i] . '</td>';
                                            $otherSkills .= '<td>' . $writing[$i] . '</td>';
                                            }
                            }
                            $otherSkills .= '</tbody></table></tr><tr><td>Driver`s License</td><td>' . $B . " ". $A. " " . $C .'</td></tr>';
                            $otherSkills .= '</tbody></table>';
                            
           }
        
?>

<html>
<head>
 <title>CVGenerator.php</title>
 <style>
 #wrapper{
     width:50%;
     display:inline-block;
    
 }
     form{
         width:80%;
         padding:10px;
         margin:0 auto;
         border:1px solid black;
     }
     table{
         border:1px solid black;
     }
     table th,td{
         border:1px solid black;
     }
     #result {
        display:inline-block;
        width:40%;
        vertical-align:top;
        margin-left:60px;
    }
 </style>
 <script>

        var nextId=0;
        function addProgrL() {
            var newDiv=document.createElement("div");
            newDiv.setAttribute('id',"progrLangBox" + nextId);
            nextId++;
            newDiv.innerHTML=
            "<input type=\"text\" name=\"progrL[]\">" +
            '<select name="level[]">' + 
            '<option value="Beginner">Beginner</option>'+
            '<option value="Programmer">Programmer</option>' +
            '<option value="Ninja">Ninja</option>' +
            '</select><br/>';
            document.getElementById('parent_prpgr_l').appendChild(newDiv);
        }
        function removeProgrL() {
            var lastBox=document.getElementById("parent_prpgr_l").lastChild;
         if(lastBox!=progrLangBox0)
            document.getElementById('parent_prpgr_l').removeChild(lastBox);
        }  
        var nextLanguage=0;
        function addLanguage() {
            var newDiv=document.createElement("div");
            newDiv.setAttribute('id',"languageBox" + nextLanguage);
            nextLanguage++;
            newDiv.innerHTML='<input type="text" name="lang[]">' +
            '<select name="comprehension[]" >'+
            '<option value="default" disabled selected>-Comprehension-</option>' +
            '<option value="beginner">beginner</option>' +
            '<option value="intermediate">intermediate</option>' +
            '<option value="advanced">advanced</option>' +
            '</select>' +
            '<select name="reading[]">' +
            '<option value="default" disabled selected>-Reading-</option>' +
            '<option value="beginner">beginner</option>' +
            '<option value="intermediate">intermediate</option>' +
            '<option value="advanced">advanced</option>' +
            ' </select>' +
            ' <select name="writing[]" >' +
            '<option value="default" disabled selected>-Writing-</option>' +
            ' <option value="beginner">beginner</option>' +
            '<option value="intermediate">intermediate</option>'+
            '<option value="advanced">advanced</option>'+
            '</select><br/>';
            
            document.getElementById('parent_language').appendChild(newDiv);
        }
        function removeLanguage() {
            var lastBox=document.getElementById("parent_language").lastChild;
         if(lastBox!=languageBox0)
            document.getElementById('parent_language').removeChild(lastBox);    
            
        }
   </script>
</head>
<body>
    <div id="wrapper">
        <form action="05CVGenerator.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <input type='text' name="fname" placeholder="First Name"/><br/>
            <input type='text' name="lname" placeholder="Last Name"/><br/>
            <input type='text' name="email" placeholder="Email"/><br/>
            <input type='text' name="pnumber" placeholder="Phone number" /><br/>
            <input type="radio" name="gender" value="female"> <label for="female">Female</label>
            <input type="radio" name="gender" value="male"><label for="male">Male</label><br>
            <label for="bday">Birth Date</label>
            <input type='date' name="bday" /><br/>
            <label for="nationality">Nationality</label>
            <select name="nationality">
                <option value="Bulgarian">Bulgarian</option>
                <option value="English">English</option>
                <option value="Singapor">Singapor</option>
            </select>
        </fieldset>
        
        <fieldset>
            <legend>Last Work Position</legend>
            <label for="compname">Company Name</label>
            <input type='text' name="compname"  /><br/>
            <label for="from">From</label>
            <input type='date' name="from" /><br/>
            <label for="to">To</label>
            <input type='date' name="to"/><br/>
        </fieldset>
            
        <fieldset>
            <legend>Computer Skills</legend>
            <label >Programming Languages</label>
            <div id="parent_prpgr_l">
            </div>
            <input type="button" name="remove-item" id="remove" value="Remove Language" onclick="removeProgrL()"/>
            <input type="button" name="add-item" id="add" value="Add Language" onclick="addProgrL()"/>
             
            
        </fieldset>
        <fieldset>
            <legend>Other Skills</legend>
            <div id="parent_language">
            </div>
            <input type="button" value="Remove Language" onclick="removeLanguage()"/>
            <input type="button"  value="Add Language" onclick="addLanguage()"/><br/>
            <label for="driver">Driver`s License</label><br/>
            <label for="B">B</label><input type="checkbox" name="B" value="B"> 
            <label for="A">A</label><input type="checkbox" name="A" value="A">
            <label for="C">C</label><input type="checkbox" name="C" value="C">
        </fieldset>
        <input type="submit" value="Generate CV" />
        </form>
</div>

<div id="result">
<?php
    if(isset($personalInfoTable) && isset($lastWorkTable) && isset($computerSkillsTable) && $otherSkills) {
    echo $personalInfoTable;
    echo $lastWorkTable;
    echo $computerSkillsTable;
    echo $otherSkills;
    }
    else {
        echo "Please enter a valid information to generate your CV";
    }
?>
</div>
<script>addProgrL()</script>
<script>addLanguage()</script>
</body>
</html>


