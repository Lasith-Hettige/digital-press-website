<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<form id=registration_form action="" method="post">
    <table>
        <tr>
            <td>Chose Username: </td>
            <td><input type="text" class="form_text" id="form_username"></td>
            <td><span class="error_form" id="username_error_message"></span></td>
        </tr>

        <tr>
            <td>Password: </td>
            <td><input type="password" class="form_text" id="form_password"></td>
            <td><span class="error_form" id="password_error_message"></span></td>
        </tr>

        <tr>
            <td>Retype Password: </td><td><input type="password" class="form_text" id="form_retype_password"></td>
            <td><span class="error_form" id="retype_password_error_message"></span>
            </td>
        </tr>

        <tr>
            <td>Email: </td><td><input type="text" class="form_text" id="form_email"></td>
            <td><span class="error_form" id="email_error_message"></span></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" class="sbmt_btn" value="Create Account"></td>
            <td></td>
        </tr>
    </table>
</form>

<script>
    $(function() {
        $("#username_error_message").hide();
        $("#password_error_message").hide();
        $("#retype_password_error_message").hide();
        $("#email_error_message").hide();

        var error_username = false;
        var error_password = false;
        var error_retype_password = false;
        var error_email = false;

        $("#form_username").focusout(function() {

            check_username();

        });

        $("#form_password").focusout(function() {

            check_password();

        });

        $("#form_retype_password").focusout(function() {

            check_retype_password();

        });

        $("#form_email").focusout(function() {

            check_email();

        });

        function check_username() {

            var username_length = $("#form_username").val().length;

            if(username_length < 5 || username_length > 20) {
                $("#username_error_message").html("Should be between 5-20 characters");
                $("#username_error_message").show();
                error_username = true;
            } else {
                $("#username_error_message").hide();

            }

        }

        function check_password() {

            var password_length = $("#form_password").val().length;

            if(password_length < 8) {
                $("#password_error_message").html("At least 8 characters");
                $("#password_error_message").show();
                error_password = true;
            } else {
                $("#password_error_message").hide();
            }

        }

        function check_retype_password() {

            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();

            if(password !=  retype_password) {
                $("#retype_password_error_message").html("Passwords don't match");
                $("#retype_password_error_message").show();
                error_retype_password = true;
            } else {
                $("#retype_password_error_message").hide();
            }

        }

        function check_email() {

            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

            if(pattern.test($("#form_email").val())) {
                $("#email_error_message").hide();
            } else {
                $("#email_error_message").html("Invalid email address");
                $("#email_error_message").show();
                error_email = true;
            }

        }

        $("#registration_form").submit(function() {

            error_username = false;
            error_password = false;
            error_retype_password = false;
            error_email = false;

            check_username();
            check_password();
            check_retype_password();
            check_email();

            if(error_username == false && error_password == false && error_retype_password == false && error_email == false) {
                return true;
            } else {
                return false;
            }

        });

    });
</script>
</body>
</html>