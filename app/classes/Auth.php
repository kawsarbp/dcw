<?php
namespace App\Classes;
class Auth extends Dbcon{
    
    //register user
    public function register($name,$email,$password)
    {
        $result =  $this->con->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')");
        return $result ? true : false;
    }
    //exist eamil
    public function user_exists($email)
    {
        $result = $this->con->query("SELECT `email` FROM `users` WHERE `email`='$email'");
        return $result->num_rows;
    }
    //login process
    public function login($email)
    {
        return $this->con->query("SELECT `id`,`name`,`email`,`password`,`status` FROM `users` WHERE `email`='$email'");
    }
    //login check

    public function isLogin()
    {
        session_start();
        return isset($_SESSION['user_email']) ? true : false;

    }
    // forget password process
    //login process
    public function get_user($email)
    {
        return $this->con->query("SELECT * FROM `users`  WHERE `email`='$email' ");
    }
    //token update
    public function tokenUpdate($token,$email)
    {
        return $this->con->query("UPDATE `users` SET `token`='$token' WHERE `email`='$email'");
    }
    // check valid token
    
    public function chekToken($email,$token)
    {
        return $this->con->query("SELECT * FROM `users` WHERE `email`='$email' AND `token`='$token' ");
    }

    //reset pwd update
    public function passwordUpdate($password,$token)
    {
        return $this->con->query("UPDATE `users` SET `password`='$password'  WHERE `token`='$token' ");
    }

}

?>