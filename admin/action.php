<?php
session_start();
require_once '../app/classes/autoload.php';
use App\Classes\Auth;


$auth = new Auth();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);




//registration process
if(isset($_POST['action']) && $_POST['action']==='register' )
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['r_password'], PASSWORD_DEFAULT);
    
    if($auth->user_exists($email) > 0){
        echo $auth->showMessage('warning','This email alerady exists our system.');
    }else{
        if($auth->register($name,$email,$password)){
            echo 'ok'; 
//            $_SESSION['user_email'] = $email;
//            $_SESSION['user_name'] = $name;
        }else{
            echo $auth->showMessage('warning','Something Wrong!');
        }
    }
}
//login process
if(isset($_POST['action']) && $_POST['action'] === 'login' ){
    $email1 = $_POST['email1'];
    $password = $_POST['password'];
    $rememberMe = isset($_POST['rememberMe']) ? 1:0;
    
    $result = $auth->login($email1);
    if($result->num_rows === 1 ){
        $row = $result->fetch_array();
        if(password_verify($password,$row['password'])){
            if($row['status'] == 1)
            {
                echo 'ok';

                if($rememberMe){
                    setcookie('user_email',$email1,time()+(7*24*60*60));
                    setcookie('user_password',$password,time()+(7*24*60*60));
                }else{
                    setcookie('user_email','',-time()+(7*24*60*60));
                    setcookie('user_password','',-time()+(7*24*60*60));
                }
                $_SESSION['user_email'] = $email1;
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];

            }else{
                echo $auth->showMessage('warning',"Your account Inactive!");
            }
        }else{
            echo $auth->showMessage('warning',"This Password don't exists our system!");
        }
    }else
    {
        echo $auth->showMessage('warning',"This '$email1' address don't exists our system!");
    }   
}
// reset password process


if(isset($_POST['action']) && $_POST['action'] === 'reset' ){
    
    $email = $_POST['email2'];
    $result = $auth->get_user($email);
    if($result->num_rows === 1 )
    {
        $token = uniqid();
        if($auth->tokenUpdate($token,$email))
        {
            
            try {
                //Server settings
                // $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'kawsarfaz100@gmail.com';                     //SMTP username
                $mail->Password   = 'knhozponuqfecpgd';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('kawsarfaz100@gmail.com', 'Faz Group');
                $mail->addAddress($email);               //Name is optional

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset Password';
                $mail->Body    = '`
                    <div style="width: 50%; margin:50px auto; border: 1px solid #dddddd; border-radius:5px; text-align:center; background:#fbfafa;">
                    <h2 style="font-family: Courier New, Courier, monospace;">Reset Your Password!</h2>
                    <a style="background: #3898db; color:#fff;border-radius:3px;padding: 5px 10px; text-decoration:none;" href="http://localhost/dcw/admin/reset-password.php?email='.$email.'&token='.$token.'">Click Here</a>
                    <br><br>
                     </div>
                `';
            
                $mail->send();
                echo $auth->showMessage('success',"check your mail, and recover your password.");
            } catch (Exception $e) {
                echo $auth->showMessage('danger',"mail not send");
            }
            

        }else
        {
        echo $auth->showMessage('warning',"somethig wrong..");
        }
    }else{
        echo $auth->showMessage('danger',"This '$email' address don't exists our system!");
    }
    
}
//set reset password


if(isset($_POST['action']) && $_POST['action'] === 'newpassword' ){
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($token !== null || $password !== null || $confirm_password !== null )
    {
        $password = password_hash($password,PASSWORD_DEFAULT);
        if($auth->passwordUpdate($password,$token))
        {

            echo $auth->showMessage('success',"Password reset success, please <a href='login.php'>login</a>.");
        }else{
            echo $auth->showMessage('danger',"Something Wrong...");
        }
    }else
    {
        echo $auth->showMessage('danger',"Something Wrong....");
    }
}





?>