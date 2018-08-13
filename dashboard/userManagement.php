<?php

require_once('auth.php');


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Meghna One page parallax responsive HTML Template ">

    <meta name="author" content="Muhammad Morshed">

    <title>Meghna | Responsive Multipurpose Parallax HTML5 Template</title>

    <!-- Mobile Specific Meta
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" /> -->

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
<!--
Start Preloader
==================================== -->
<div id="preloader">
    <div class="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
</div>
<!--
End Preloader
==================================== -->

<!--
Welcome Slider
==================================== -->


<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar navigation">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <a class="navbar-brand logo" href="#body">
                <!-- <img src="images/logo.png" alt="Website Logo" /> -->
                <svg width="40px" height="40px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                            <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                            <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                            <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                        </g>
                    </g>
                </svg>
            </a>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav navigation-menu">
                <li><a href="userManagement.php">User Management</a></li>
                <li><a href="loginManagement.php">Login Management</a></li>
                <li><a href="colourOrderManagement.php">4 Colour Oders</a></li>
                <li><a href="bnwOrderManagement.php">Black &amp; White Oders</a></li>

                <li><a href="cardOrderManagement.php">Business Card Oders</a></li>

                <li><a href="../index.php">LogOut</a></li>
                <li><a style="color:yellow;margin-left:30px;"><?php   $a = $_SESSION['SESS_EMAIL'];
                        echo $a; ?></a></li>
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>
<!--
End Fixed Navigation
==================================== -->





<!-- Start Services Section
==================================== -->

<section id="userManagement" class="bg-one section">
    <div class="container">

            <h2 style="color:white;">User Management</h2>
            <div class="center"><button data-toggle="modal" data-target="#insert_data" class="btn btn-primary center-block">Add</button></div><br>
            <table class="table table-hover" id="data_table">
                <thead style="color:white;">
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company Name</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>

        <div class="modal fade" id="insert_data" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Insert Data Form</h3>
                    </div>
                    <div class="modal-body">
                        <!-- content goes here -->
                        <form method="post" id="insert_form">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" class="form-control" name="company_name" id="company_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <input type="hidden" name="userId" id="userId">
                            <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete-data" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabel">Confirm</h3>
                    </div>
                    <div class="modal-body">
                        <!-- content goes here -->
                        <form method="post" id="delete-form">
                            <p>Confirm delete?</p>
                            <input type="hidden" name="userId" id="userId">
                            <input type="submit" name="insert" id="delete-user" value="Delete" class="btn btn-success" />
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>   	<!-- End container -->
</section>   <!-- End section -->






<script>
    $(document).ready(function(){

        $(document).on("click",".edit_data",function(){
            var userId = $(this).data("user-id");

            $.ajax({
                url:"fetch.php",
                method : "POST",
                data: {userId: userId},
                dataType: "json",
                success:function(data){
                    $('#first_name').val(data.fName);
                    $('#last_name').val(data.lName);
                    $('#company_name').val(data.cName);
                    $('#contact_number').val(data.cNumber);
                    $('#email').val(data.uEmail);
                    $('#userId').val(data.uId);

                    $('#insert').val("Update");
                    $('#insert_data').modal("show");
                    console.log('Success!');
                }
            });
        });


        $(document).on("click",".delete_data",function(){
            $("#delete-data").find("#userId").val($(this).data("user-id"));
            $("#delete-data").modal("show");

            return false;
        });

        $('#insert_data').on('hidden.bs.modal', function () {
            $('#first_name').val("");
            $('#last_name').val("");
            $('#company_name').val("");
            $('#contact_number').val("");
            $('#email').val("");
            $('#userId').val("");
            $('#insert').val("Add");
        });

        $('#insert_form').on('submit',function(event){
            event.preventDefault();
            if($('#first_name').val() == '') {
                alert("Name is required");
            } else{
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data: $(this).serialize(),
                    success:function(data){
                        $('#insert_data').modal('hide');
                        loadTableData();
                    }
                });
            }
        });

        $('#delete-form').on('submit',function(event){
            event.preventDefault();

            $.ajax({
                url:"delete.php",
                method:"POST",
                data: $(this).serialize(),
                success:function(data){
                    $("#delete-data").modal('hide');
                    loadTableData();
                }
            });
        });

        function loadTableData() {
            $.ajax({
                url:"readUserData.php",
                method : "GET",
                data: {},
                dataType: "json",
                success:function(data){
                    var raws = "<tbody>";
                    $.each(data, function(i, v) {
                        raws += "<tr  style='color:#57cbcc'>"+
                            "<td>"+ v.uId +"</td>" +
                            "<td>"+ v.fName +"</td>" +
                            "<td>"+ v.lName +"</td>" +
                            "<td>"+ v.cName +"</td>" +
                            "<td>"+ v.cNumber +"</td>" +
                            "<td>"+ v.uEmail  +"</td>" +
                            "<td><button type=\"button\" value=\"Edit\" name=\"edit\" data-user-id="+ v.uId +" class=\"edit_data btn btn-info btn-xs \">Edit</button> <button type=\"button\" value=\"Delete\" name=\"delete\"  data-user-id="+ v.uId +" class=\"delete_data btn btn-danger btn-xs \">Delete</button></td>" +
                            "</tr>";
                    });
                    raws += "</tbody>";
                    $('#data_table').find("tbody").remove();
                    $('#data_table').find("thead").after(raws);
                }
            });
        }

        loadTableData();
    });
</script>



<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slick Carousel -->
<script type="text/javascript" src="plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Portfolio Filtering -->
<script type="text/javascript" src="plugins/mixitup/dist/mixitup.min.js"></script>
<!-- Smooth Scroll -->
<script type="text/javascript" src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<!-- Magnific popup -->
<script type="text/javascript" src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- Google Map API -->
<script type="text/javascript"  src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Sticky Nav -->
<script type="text/javascript" src="plugins/Sticky/jquery.sticky.js"></script>
<!-- Number Counter Script -->
<script type="text/javascript" src="plugins/count-to/jquery.countTo.js"></script>
<!-- wow.min Script -->
<script type="text/javascript" src="plugins/wow/dist/wow.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>