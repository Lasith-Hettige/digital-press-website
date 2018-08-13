<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 1/14/2018
 * Time: 8:22 AM
 */
    include "connection.php";

    $price = '';
    $size = $_POST['size'];
    $side = $_POST['side'];
    $qty = $_POST['quantity'];

    $sql = "SELECT * FROM bw_format WHERE size='$size' AND side='$side' ";

    $result = mysql_query($sql);

    while ($row = mysql_fetch_assoc($result)) {
        $price = $row['price'];
    }

    $total = $price * $qty;
    echo $total;