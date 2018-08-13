<?php
/**
 * Created by PhpStorm.
 * User: Lasith Hettige
 * Date: 1/14/2018
 * Time: 12:07 PM
 */

//Include database connection details
require_once('connection.php');



// ORDER POST VALUES
if (isset($_POST['orderSubmit'])) {
    // receive all input values from the form
    $email = mysql_real_escape_string($_POST['email']);
    $name = '';
    $paper = mysql_real_escape_string($_POST['paperType']);
    $size = mysql_real_escape_string($_POST['size']);
    $side = mysql_real_escape_string($_POST['side']);
    $quantity = mysql_real_escape_string($_POST['quantity']);
    $price = '';
    $total ='';

    $sql1 = "SELECT * FROM b_card_format WHERE paper_type='$paper' AND size='$size' AND side='$side' ";

    $result = mysql_query($sql1);
    while ($row = mysql_fetch_assoc($result)) {
        $price = $row['price'];
    }
    $total = $price * $quantity;


    $sql= "SELECT fName FROM usertable WHERE uEmail ='$email'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
        $name = $row['fName'];

    function GetImageExtension($imagetype)
    {
        if(empty($imagetype)) return false;
        switch($imagetype)
        {
            case 'cardOrders/bmp': return '.bmp';
            case 'cardOrders/gif': return '.gif';
            case 'cardOrders/jpeg': return '.jpg';
            case 'cardOrders/png': return '.png';
            default: return false;
        }
    }

    if (!empty($_FILES["uploadedImage"]["name"])) {

        $file_name=$_FILES["uploadedImage"]["name"];
        $temp_name=$_FILES["uploadedImage"]["tmp_name"];
        $imgtype=$_FILES["uploadedImage"]["type"];
        $ext= GetImageExtension($imgtype);
        $imagename=date("d-m-Y")."-".time().$ext;
        $target_path = "cardOrders/".$imagename;

        if(move_uploaded_file($temp_name, $target_path)) {
            $query_upload="INSERT into b_card_order (uEmail,uName,paper_type,size,side,imagePath,submissionDate,qty,price) VALUES
            ('$email','$name','$paper','$size','$side','".$target_path."','".date("Y-m-d")."','$quantity','$total')";


            if(mysql_query($query_upload) == true){

                echo "<div class='alert alert-success alert-dismissable fade in'>";
                echo "<a href='#our-team' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Success!</strong> Order Submited Successfully.";
                echo " </div>";

            }
            else{

                echo "<div class='alert alert-warning alert-dismissable fade in'>";
                echo "<a href='#pricing' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                echo "<strong>Warning!</strong> Order Submit doesn't Successfully.";
                echo " </div>";


            }


        }
    }



}