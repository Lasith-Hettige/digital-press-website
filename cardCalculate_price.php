<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 1/14/2018
 * Time: 12:11 PM
 */


    include "connection.php";

    $price = '';
    $size = $_POST['size'];
    $side = $_POST['side'];
    $qty = $_POST['quantity'];
    $paper = $_POST['paperType'];

    $sql = "SELECT * FROM b_card_format WHERE paper_type='$paper' AND size='$size' AND side='$side' ";

    $result = mysql_query($sql);

    while ($row = mysql_fetch_assoc($result)) {
        $price = $row['price'];
    }

    $total = $price * $qty;
    echo $total;