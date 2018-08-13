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
    $email = mysql_real_escape_string($_POST['user_email']);
    $password = mysql_real_escape_string($_POST['user_password']);
    $status = mysql_real_escape_string($_POST['status']);
    $a = $_POST['insert'];

    if (isset($_POST['userId']) && $_POST['userId'] > 0 ) {
        $sql = "UPDATE logintable SET uEmail='{$email}', password='{$password}', status='{$status}' WHERE Lid = {$_POST['userId']}";
    } else {
        $sql = "INSERT INTO logintable(uEmail,password,status) VALUES ('$email','$password','$status')";

        echo $sql;
    }


    if(mysql_query($sql)){
        echo true;
    }
}

