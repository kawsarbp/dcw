<?php

namespace App\Classes;

use mysqli;

class Dbcon{
    public $con;
    public $base_url = "http://localhost/dcw/";

    public function __construct()
    {
        $this->con = new mysqli('localhost','root','','dcw');
        if($this->con->connect_error){
            die($this->con->connect_error);
        }
    }

// alert message
public function showMessage($type,$message)
{
    $output = '';
    $output .= '<div class="alert alert-'.$type.' alert-dismissible fade show  text-center" role="alert">';
    $output .= $message;
    $output .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    $output .= '</div>';
    
    return $output;
}




}
?>