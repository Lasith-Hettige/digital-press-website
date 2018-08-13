<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/7/2017
 * Time: 10:19 PM
 */
include "connection.php";

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $fName = mysql_real_escape_string($_POST['fname']);
    $lName = mysql_real_escape_string($_POST['lname']);
    $cName = mysql_real_escape_string($_POST['cname']);
    $cNumber = mysql_real_escape_string($_POST['cnumber']);
    $email = mysql_real_escape_string($_POST['email']);
    $password_1 = mysql_real_escape_string($_POST['password_1']);
    $password_2 = mysql_real_escape_string($_POST['password_2']);

    $sql1 = "INSERT INTO usertable(fName,lName,cName,cNumber,uEmail) VALUES('$fName','$lName','$cName','$cNumber','$email')";

    $sql2 = "INSERT INTO logintable(uEmail,password) VALUES('$email','$password_1')";

    if(mysql_query($sql1) == true && mysql_query($sql2) == true){

        echo "<div class='alert alert-success alert-dismissable fade in'>";
        echo "<a href='#pricing' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo "<strong>Success!</strong> User Registration Successfully.";
        echo " </div>";

    }
    else{

        echo "<div class='alert alert-warning alert-dismissable fade in'>";
        echo "<a href='#pricing' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo "<strong>Warning!</strong> User Registration doesn't Successfully.";
        echo " </div>";


    }

}