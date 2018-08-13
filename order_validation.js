        /**
         * Created by Lasith Hettige on 1/4/2018.
         */

        /**
         * Created by Lasith Hettige on 12/9/2017.
         */


        $(function() {
            $("#size_error_message").hide();
            $("#side_error_message").hide();
            $("#qty_password_error_message").hide();
            $("#paperType_error_message").hide();
            $("#design_error_message").hide();

            var error_size = false;
            var error_side = false;
            var error_qty = false;
            var error_paperType = false;
            var error_design = false;

            $("#form_size").focusout(function() {

                check_size();

            });

            $("#form_side").focusout(function() {

                check_side();

            });

            $("#form_qty").focusout(function() {

                check_qty();

            });

            $("#form_paperType").focusout(function() {

                check_paperType();

            });

            $("#form_design").focusout(function(){

                check_design();
            });

            function check_size() {

                var size = $("#form_size").val();

                if(size == '') {
                    $("#size_error_message").html("Select paper size");
                    $("#size_error_message").show();
                    error_size = true;
                } else {
                    $("#size_error_message").hide();

                }

            }

            function check_side() {

                var side = $("#form_side").val();

                if(side == '') {
                    $("#side_error_message").html("Select side of paper");
                    $("#side_error_message").show();
                    error_side = true;
                } else {
                    $("#side_error_message").hide();
                }

            }

            function check_qty() {

                var qty = $("#form_qty").val();
                if(qty == '') {
                    $("#qty_error_message").html("Enter quantity");
                    $("#qty_error_message").show();
                    error_qty = true;
                } else {
                    $("#qty_error_message").hide();
                }

            }

            function check_paperType() {

                var paperType = $("#form_paperType").val();

                if(paperType == '') {
                    $("#paperType_error_message").html("Select paper type");
                    $("#paperType_error_message").show();
                    error_paperType = true;
                } else {
                    $("#paperType_error_message").hide();
                }

            }

            function check_design(){

                var design = $("#form_design").val();

                if(design == '') {
                    $("#design_error_message").html("Upload design");
                    $("#design_error_message").show();
                    error_design = true;
                } else {
                    $("#design_error_message").hide();
                }
            }


            $("#order_form #calculate").on("click", function() {
                check_size();
                check_side();
                check_qty();
                check_paperType();


                if (error_size || error_side  || error_paperType || error_qty) {
                    return false;
                }

                $.ajax({
                    url:"calculate_price.php",
                    method:"POST",
                    data: $("#order_form").serialize(),
                    success:function(data){
                        $("#total-display span").html(data);
                    }
                });

                return false;
            });

            $("#order_form").submit(function() {
                error_size = false;
                error_side = false;
                error_qty = false;
                error_paperType = false;
                error_design = false;

                check_size();
                check_side();
                check_qty();
                check_paperType();
                check_design();

                if(error_size == false && error_side == false && error_qty == false && error_paperType == false && error_design == false ) {
                    return true;
                } else {
                    return false;
                }

            });

            $("#black_order_form #calculate").on("click", function() {
                check_size();
                check_side();
                check_qty();


                if (error_size || error_side || error_qty) {
                    return false;
                }

                $.ajax({
                    url:"blackCalculate_price.php",
                    method:"POST",
                    data: $("#black_order_form").serialize(),
                    success:function(data){
                        $("#total-display span").html(data);
                    }
                });

                return false;
            });

            $("#black_order_form").submit(function() {
                error_size = false;
                error_side = false;
                error_qty = false;
                error_design = false;

                check_size();
                check_side();
                check_qty();
                check_design();

                if(error_size == false && error_side == false && error_qty == false &&  error_design == false ) {
                    return true;
                } else {
                    return false;
                }

            });


            $("#card_order_form #calculate").on("click", function() {
                check_size();
                check_side();
                check_qty();
                check_paperType();


                if (error_size || error_side  || error_paperType || error_qty) {
                    return false;
                }

                $.ajax({
                    url:"cardCalculate_price.php",
                    method:"POST",
                    data: $("#card_order_form").serialize(),
                    success:function(data){
                        $("#total-display span").html(data);
                    }
                });

                return false;
            });

            $("#card_order_form").submit(function() {
                error_size = false;
                error_side = false;
                error_qty = false;
                error_paperType = false;
                error_design = false;

                check_size();
                check_side();
                check_qty();
                check_paperType();
                check_design();

                if(error_size == false && error_side == false && error_qty == false && error_paperType == false && error_design == false ) {
                    return true;
                } else {
                    return false;
                }

            });

        });

