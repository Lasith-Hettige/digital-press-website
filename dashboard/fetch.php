<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/6/2017
 * Time: 1:46 PM
 */

include 'connection.php';

if(isset($_POST['userId'])){

    $sql = "SELECT * FROM userTable WHERE uId = '".$_POST['userId']."' ";

    $result = mysql_query($sql);

    $row = mysql_fetch_assoc($result);

    echo json_encode($row);
}