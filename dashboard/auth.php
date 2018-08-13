<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/10/2017
 * Time: 2:38 AM
 */


	//Start session
	session_start();

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
        header("location: index.php");
        exit();
    }

?>