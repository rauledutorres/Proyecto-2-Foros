<?php
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>foro</title>
</head>
<body>
        <div class="container">
            <div class="header">
                <div class="header_cont">
                    <img src="img/icons/logo.svg" alt=""/>
                    <div>
                        <h1><i>Foro</i></h1>
                        <h4>Habla con internet</h4>
                    </div>
                </div>   
                <div id="is" class="btn is">
                    <span>Iniciar Sesion</span>
                </div>
                <div id="reg" class="btn">
                    <span>Registrarse</span>
                </div>
            </div>
            <main>
                <div id="login" class="caja">
                    <div class="cont_form log">
                        <div class="title_log">
                            <h2>Accede a Foro</h2>
                            <h4>La Mayor comunidad de foros</h4>
                        </div>
                        <form method="post"  action="#">
                            <label class="img_group img_log_email" ><img src="img/icon_input_nom.png" alt=""></label>
                            <input class="inp_log" type="text" name="email" placeholder="Email" required/>
                            <label class="img_group img_log_pass" ><img src="img/icon_input_pass.png" alt=""></label>
                            <label class="img_group img_log_vitxt pass" ><img src="img/vector_eye.png" alt=""></label>
                            <label class="img_group img_log_vipass" ><img src="img/icon_input_pass_text.png" alt=""></label>
                            <input  id="log_pass"class="inp_log" type="password" name="pass" placeholder="Password" required/>
                            <a class="form_te" href="">¿Has olvidado tu contraseña?</a>
                            <button class="btn_log" type="submit" name="login">Login</button>
                            <?php
                            if (isset($_POST['login'])) {
                                $email=$_POST['email'];
                                $password=$_POST['pass']; 


                                $sql=mysqli_query($connect,("SELECT * FROM usuarios where 
                                                                        user_correo ='$email' and 
                                                                        user_cont = '$password'"));
                                $ver=mysqli_num_rows($sql);
                                if ($ver==1) {
                                   $row=mysqli_fetch_array($sql);
                                    $id=$row['user_id'];
                                    if ($email == $row['user_correo'] && $password == $row['user_cont']) {
                                        
                                        $_SESSION['id'] = $id;
                                        $_SESSION['signed_in']= true;
                                        $acceso = date("Y-m-d H:i:s");
                                        $int=mysqli_query($connect,"UPDATE `usuarios` SET `user_time`='$acceso' WHERE `user_id`='$id';");
                                        header('location: index.php ');
                                    }
                                }
                            }
                            ?>
                        </form>
                    </div>
                    <div class="cont_img">
                        <img class="img_one" src="img/web/img_login.jpg" alt="">
                    </div>
                </div>

                <div id="registro" class="caja registro">
                    <div class="cont_img">
                        <img src="img/web/questions-not-css.svg" alt=""></svg>
                    </div>
                    <div class="cont_form reg">
                        <div class="title_reg">
                            <h2>Unete a Foro</h2>
                            <h4>La Mayor comunidad de foros</h4>
                        </div>
                        <form method="post"  action="#" enctype='multipart/form-data'>
                            <label class="img_group img_reg_name" ><img src="img/icon_input_name.png" alt=""></label>
                            <input class="inp_reg" type="text" name="name"  placeholder="Name">
                            <label class="img_group img_reg_email" ><img src="img/icon_input_nom.png" alt=""></label>
                            <input class="inp_reg" type="text" name="email"  placeholder="Email" required>
                            <label class="img_group img_reg_pass" ><img src="img/icon_input_pass.png" alt=""></label>
                            <label class="img_group img_reg_vitxt pass" ><img src="img/vector_eye.png" alt=""></label>
                            <label class="img_group img_reg_vipass" ><img src="img/icon_input_pass_text.png" alt=""></label>
                            <input id="pass" class="inp_reg input_pass" type="password" name="pass"  placeholder="Contraseña">
                            <label class="img_group img_reg_pass1" ><img src="img/icon_input_pass.png" alt=""></label>
                            <input id="valid_pass"class="inp_reg" type="text" name="valid_pass" placeholder="Repite tu Contraseña">
                            <button disabled class="btn_reg" type="submit" name="registrar" >Registrate</button>
                            <span>¿Ya tienes Cuenta? <a class="form_et" href="">Inicia Sesion</a></span>
                            
                            <?php 
                                if (isset($_POST['registrar'])){
                                    
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $password=$_POST['pass'];

                                    $rev=mysqli_num_rows(mysqli_query($connect,"SELECT user_correo from usuarios where user_correo = '$email' "));
                                    if($rev==0){
                                        $sql=mysqli_query($connect,"INSERT INTO usuarios (user_nombre,
                                                                                    user_correo,
                                                                                    user_cont)
                                                                            VALUES ('$name',
                                                                                    '$email',
                                                                                    '$password')");
                                    }else{
                                        ?>
                                    <script>alert("El correo ya se encuentra registrado");</script>
                                    <?php
                                    }                              
                                }
                            ?>
                        </form>
                        
                    </div> 
                </div>
            </main>
        </div>
        
        <script src="scrip.js"></script>
</body>
</html>