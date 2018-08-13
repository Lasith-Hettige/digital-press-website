<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/30/2017
 * Time: 1:47 AM
 */
//Start session
        session_start();

        //Include database connection details
        require_once('connection.php');

        $user = $_SESSION['SESS_EMAIL'];
        var_dump($user);
        //Array to store validation errors
        $errmsg_arr = array();

        //Validation error flag
        $errflag = false;

        //Function to sanitize values received from the form. Prevents SQL injection
        function clean($str) {
            echo "str: ".$str;
            $str = @trim($str);
            if(get_magic_quotes_gpc()) {
                $str = stripslashes($str);
            }
            return mysql_real_escape_string($str);
        }

        //Sanitize the POST values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['message'];


        //Input Validations
        if($name == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;

        }
        if($email == '') {
            $errmsg_arr[] = 'Email missing';
            $errflag = true;
        }
        if($sub == '') {
            $errmsg_arr[] = 'Subject missing';
            $errflag = true;
        }

        if($errflag) {
            $_SESSION['ERRMSG_ARRAY'] = $errmsg_arr;
            session_write_close();
            if($user == '') {
                header("location: index.php#contact-us");
            }
            else {
                header("location: user.php#contact-us");
            }
            exit();
        }

        //If there are input validations, redirect back to the login form


            $to = "lasith@gmail.com"; // this is your Email address
            $from = $email; // this is the sender's Email address
            $first_name = $name;

            $subject = "Form submission";

            $message = $first_name . " wrote the following:" . "\n\n" . $msg;


            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to, $subject, $message, $headers);


            $errmsg_arr[] = 'Mail Sent. Thank you  '. $first_name .' , we will contact you shortly.';
            $errflag = true;

            $_SESSION['SUCCMSG_ARRAY'] = $errmsg_arr;
            session_write_close();
            if($user == '') {
                header("location: index.php#contact-us");
            }
            else {
                header("location: user.php#contact-us");
            }
            exit();



    ?>