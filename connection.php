<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/5/2017
 * Time: 12:03 AM
 */

$hostname = "localhost";
$username = "root";
$password = "";
$db = "digital_press";

//Connecting to database
$conn = mysql_connect($hostname,$username,$password) or die('Cannot connect to MySQL server');
//Selecting Database
mysql_select_db($db) or die ('Cannot open database');
