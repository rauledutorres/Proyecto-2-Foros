<?php 
session_start();
require 'config.php';
$id=$_SESSION['welcome_usuario'];

$acceso = date("Y-m-d H:i:s");
$int=mysqli_query($connect,"UPDATE `usuarios` SET `user_time`='$acceso' WHERE `user_id`='$id';");

unset($_SESSION['welcome_usuario']);
                                        
session_destroy();
header('location: login-registro.php');
?>
