<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 12/5/2017
 * Time: 12:19 AM
 */
include "connection.php";

$return_arr = [];
$sql = "SELECT * FROM bw_order";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    array_push($return_arr, $row);
}

echo json_encode($return_arr);


