<?php 

$errors = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $msg    = $_POST['msg'];
    

    header('Location: http://localhost/wordpress/');
}

?>