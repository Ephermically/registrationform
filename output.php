<?php
    include_once ("validation.php");
    $fname = $_POST['fname'];
        echo $fname,"<br>";
    $mname = $_POST['mname'];
        echo $mname,"<br>";
    $lname = $_POST['lname'];
        echo $lname,"<br>";
    $address = $_POST['address'];
        echo $address,"<br>";
    $cvstatus = $_POST['cvstatus'];
        echo $cvstatus,"<br>";
    $dob = $_POST['dob'];
        echo $dob,"<br>";
    $pob = $_POST['pob'];
        echo $pob,"<br>";
    $gender = $_POST['gender'];
        echo $gender,"<br>";
    $email = $_POST['email'];
        echo $email,"<br>";
    $contact = $_POST['contact'];
        echo $contact,"<br>";
    $guardian = $_POST['guardian'];
        echo $guardian,"<br>";
    $yrlevel = $_POST['yrlevel'];
        echo $yrlevel,"<br>";
    $course = $_POST['course'];
        echo $course,"<br>";
    $sy = $_POST['sy'];
        echo $sy,"<br>";

        /*1*/
    if (notEmp($fname) && notEmp($lname) && notEmp($mname) && notEmp($address) && notEmp($pob) 
    && notEmp($guardian) && notEmp($cvstatus) && notEmp($sy) && notEmp($email)){
        echo "correct", "<br>";
    }
    else{
        echo "incorrect", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($fname) && shouldnotNum($lname) && shouldnotNum($mname) &&shouldnotNum($address)
     && shouldnotNum($pob) && shouldnotNum($guardian) && shouldnotNum($cvstatus) && shouldnotNum($email)){
        echo "no number", "<br>";
    }
    else{
        echo "there is a number", "<br>";
    }
    /* 3 */
    if (notSpecialChar($fname) && notSpecialChar($lname) && notSpecialChar($mname) 
    && notSpecialChar($address) && notSpecialChar($pob) && notSpecialChar($guardian) && notSpecialChar($contact) 
    && notSpecialChar($cvstatus) && notSpecialChar($sy) && notSpecialChar($email)){
        echo "there is no special character", "<br>";
    }
    else{
        echo "there is a special character", "<br>";
    }
    /* 4 */
    if (moreThan2($lname) && moreThan2($fname)){
        echo "more than two letters", "<br>";
    }
    else{
        echo "less than two letters ", "<br>";
    }
    /* 5 */
    if (notags($lname) && notags($fname) && notags($mname) && notags($address) && notags($pob)
     && notags($guardian) && notags($cvstatus) && notags($sy) && notags($email)){
       echo "No HTML tags", "<br>";
    }
    else{
        echo "It has HTML tags", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "valid email", "<br>";
    }
    else{
        echo "Invalid email", "<br>";
    }
    /* 7 */
    if (philpreffix($contact)){
        echo "valid contact number";
    }
    else{
        echo "invalid contact";
    }
    
?>