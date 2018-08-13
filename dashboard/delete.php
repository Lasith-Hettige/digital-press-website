<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/26/2017
 * Time: 12:00 AM
 */
include 'connection.php';

if(!empty($_POST)) {

    if (isset($_POST['userId']) && $_POST['userId'] > 0)  {
        $sql = "DELETE FROM userTable  WHERE uId = {$_POST['userId']}";

        if (mysql_query($sql)) {
            echo true;
        }
    }
}