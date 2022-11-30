$(document).ready(function(){
    const site_url = "http://localhost/dcw/";

    // form show and hide start
    $("#showSignUpForm").click(function(){
        $("#login-form-box").hide();
        $("#register-form-box").show();
    });

    $("#showSignInForm").click(function(){
        $("#login-form-box").show();
        $("#register-form-box").hide();
    });
    $("#showForgetForm").click(function(){
        $("#login-form-box").hide();
        $("#forgotton-form-box").show();
    });
    $("#back").click(function(){
        $("#login-form-box").show();
        $("#forgotton-form-box").hide();
    });
    // form show and hide end
    //regiser user start
    
    $("#registerUser").click(function(e){
        if($("#register-form")[0].checkValidity()){
            e.preventDefault();
            $("#registerUser").val("Loading...").attr('disabled', true);
            //validate
            if($("#name").val()===''){
                $("#name").addClass("is-invalid")
            }else{
                $("#name").removeClass("is-invalid")
            }
            if($("#email").val()===''){
                $("#email").addClass("is-invalid")
            }else{
                $("#email").removeClass("is-invalid")
            }
            if($("#r_password").val()===''){
                $("#r_password").addClass("is-invalid")
            }else{
                $("#r_password").removeClass("is-invalid")
            }
            if($("#c_password").val()===''){
                $("#c_password").addClass("is-invalid")
            }else{
                $("#c_password").removeClass("is-invalid")
            }
            if($("#r_password").val() === $("#c_password").val() )
            {
                if($("#name").val()!=='' && $("#email").val()!=='' )
                {
                    $.ajax({
                        url: site_url + 'admin/action.php',
                        method: 'post',
                        data: $("#register-form").serialize()+'&action=register',
                        success:function(respons){
                            if(respons === 'ok')
                            {
                                window.location = 'login.php';
                            }else{
                                $("#registerError").html(respons);
                            }
                        }
                    })
                }
                
            }else
            {
                $(".passerror").html('password do not match!');
            }
            $("#registerUser").val("Register").attr('disabled', false);
        }
    });
    // register part end
    //login part start
    $("#loginBtn").click(function(e){
        if($("#login-form")[0].checkValidity()){
            e.preventDefault();
            $("#loginBtn").val("Loading..").attr('disabled', true);
            
            $.ajax({
                url: site_url + 'admin/action.php',
                method: 'post',
                data: $("#login-form").serialize()+'&action=login',
                success:function(respons){
                    if(respons === 'ok'){
                        window.location = 'index.php';
                    }else{
                        $("#loginError").html(respons);
                    }
                }
            })
            
            $("#loginBtn").val("Sign In").attr('disabled', false);
        }
    });
// reset password

$("#resetPassword").click(function(e){
    if($("#forgotton-form")[0].checkValidity()){
        e.preventDefault();
        $("#resetPassword").val("Loading..").attr('disabled', true);
        if($("#email2").val()===''){
            $("#email2").addClass("is-invalid");
        }else{
            $("#email2").removeClass("is-invalid");
            $.ajax({
                url: site_url + 'admin/action.php',
                method: 'post',
                data: $("#forgotton-form").serialize()+'&action=reset',
                success:function(respons){
                    $("#resetPassword").val("Reset Password").attr('disabled', false);
                    $("#resetPasswordError").html(respons);
                    $("#email2").val('');
                }
            });
        }
    }
});
$("#forgotBtn").click(function(e){
    if($("#forgot-password-form")[0].checkValidity()){
        e.preventDefault();
        $("#forgotBtn").val("Loading..").attr('disabled', true);

        if($("#password").val()===''){
            $("#password").addClass("is-invalid");
        }else{
            $("#password").removeClass("is-invalid");
        }

        if($("#password").val() !== '' && $("#confirm_password").val()!==''){
            if($("#password").val() === $("#confirm_password").val()){
            $("#confirm_password").removeClass("is-invalid");
                $.ajax({
                url: site_url + 'admin/action.php',
                method: 'post',
                data: $("#forgot-password-form").serialize()+'&action=newpassword',
                success:function(respons){
                    $("#forgotBtn").val("Reset Password").attr('disabled', false);
                    $("#forgotError").html(respons);
                    $("#password").val('');
                    $("#confirm_password").val('');
                }
              });
        }else
        {
            $("#confirm_password").addClass("is-invalid");
        }
    }
        
    }
});





});