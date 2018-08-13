/**
 * Created by Lasith Hettige on 12/9/2017.
 */


$(function() {
    $("#username_error_message").hide();
    $("#password_error_message").hide();
    $("#retype_password_error_message").hide();

    $("#cnumber_error_message").hide();

    var error_username = false;
    var error_password = false;
    var error_retype_password = false;

    var error_number = false;

    $("#form_username").focusout(function() {

        check_username();

    });

    $("#form_password").focusout(function() {

        check_password();

    });

    $("#form_retype_password").focusout(function() {

        check_retype_password();

    });


    $("#form_cnumber").focusout(function(){

        check_contactNumber();
    });

    function check_username() {

        var username_length = $("#form_username").val().length;

        if(username_length < 3 || username_length > 10) {
            $("#username_error_message").html("Should be between 3-10 characters");
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


    function check_contactNumber(){

        var pattern = new RegExp(/^\d{10}$/);

        if(pattern.test($("#form_cnumber").val())){
            $("#cnumber_error_message").hide();
        }else{
            $("#cnumber_error_message").html("Invalid Contact Number");
            $("#cnumber_error_message").show();
            error_number = true;
        }
    }

    $("#registration_form").submit(function() {

        error_username = false;
        error_password = false;
        error_retype_password = false;

        error_number = false;

        check_username();
        check_password();
        check_retype_password();

        check_contactNumber();

        if(error_username == false && error_password == false && error_retype_password == false  && error_number == false ) {
            return true;
        } else {
            return false;
        }

    });

});
