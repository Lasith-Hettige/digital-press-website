<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/5/2017
 * Time: 9:43 AM
 */
include 'connection.php';

if(!empty($_POST)){

$output = '';
    $fname = mysql_real_escape_string($_POST['first_name']);
    $lname = mysql_real_escape_string($_POST['last_name']);
    $cname = mysql_real_escape_string($_POST['company_name']);
    $pNumber = mysql_real_escape_string($_POST['contact_number']);
    $email = mysql_real_escape_string($_POST['email']);
    $a = $_POST['insert'];
    var_dump($a);
    if (isset($_POST['userId']) && $_POST['userId'] > 0 ) {
        $sql = "UPDATE userTable SET fName='{$fname}', lName='{$lname}', cName='{$cname}', cNumber='{$pNumber}', uEmail='{$email}' WHERE uId = {$_POST['userId']}";
    } else {
        $sql = "INSERT INTO userTable(fName,lName,cName,cNumber,uEmail) VALUES ('$fname','$lname','$cname','$pNumber','$email')";

        echo $sql;
    }


    if(mysql_query($sql)){
        echo true;
    }
}

