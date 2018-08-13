    <?php
        /**
         * Created by PhpStorm.
         * User: Lasith Hettige
         * Date: 12/10/2017
         * Time: 1:52 AM
         */

        //Start session
        session_start();

        //Include database connection details
        require_once('connection.php');

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
        $username = $_POST['email'];
        $password = $_POST['password'];


        //Input Validations
        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }

        //If there are input validations, redirect back to the login form
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: index.php#our-team");
            exit();
        }

        if($username == 'Admin@gmail.com' ){

            $qry1="SELECT * FROM logintable WHERE uEmail='Admin@gmail.com' AND password='$password' AND status ='active' ";
            $result1=mysql_query($qry1);

            //Check whether the query was successful or not
            if($result1) {
                if(mysql_num_rows($result1) > 0) {
                    //Login Successful
                    session_regenerate_id();
                    $member = mysql_fetch_assoc($result1);
                    $_SESSION['SESS_MEMBER_ID'] = $member['Lid'];
                    $_SESSION['SESS_EMAIL'] = $member['uEmail'];
                    $_SESSION['SESS_PASSWORD'] = $member['password'];
                    session_write_close();
                    header("location: ./dashboard/userManagement.php");
                    exit();
                }else {
                    //Login failed
                    $errmsg_arr[] = 'password not found';
                    $errflag = true;
                    if($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        header("location: index.php#our-team");
                        exit();
                    }
                }
            }else {
                die("Query failed");
            }
        }

        else {


            //Create query
            $qry = "SELECT * FROM logintable WHERE uEmail='$username' AND password='$password' AND status ='active'";
            $result = mysql_query($qry);

            //Check whether the query was successful or not
            if ($result) {
                if (mysql_num_rows($result) > 0) {
                    //Login Successful
                    session_regenerate_id();
                    $member = mysql_fetch_assoc($result);
                    $_SESSION['SESS_MEMBER_ID'] = $member['Lid'];
                    $_SESSION['SESS_EMAIL'] = $member['uEmail'];
                    $_SESSION['SESS_PASSWORD'] = $member['password'];
                    session_write_close();
                    header("location: user.php");
                    exit();
                } else {
                    //Login failed
                    $errmsg_arr[] = 'user name and password not found';
                    $errflag = true;
                    if ($errflag) {
                        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                        session_write_close();
                        header("location: index.php#our-team");
                        exit();
                    }
                }
            } else {
                die("Query failed");
            }

        }
