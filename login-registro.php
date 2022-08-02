


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login/Sign up</title>
</head>
<body>
        <div class="container">
            <div class="header">
                <div class="header_cont">
                    <img src="img/icono.png" alt=""/>
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
                        <form  action="">
                            <label class="img_group img_log_name" ><img src="img/icon_input_nom.png" alt=""></label>
                            <input class="inp_log" type="text" placeholder="Email" />
                            <label class="img_group img_log_pass" ><img src="img/icon_input_pass.png" alt=""></label>
                            <input class="inp_log" type="password" placeholder="Password"/>
                            <a class="form_te" href="">¿Has olvidado tu contraseña?</a>
                            <button class="btn_log" >Login</button>
                        </form>
                    </div>
                    <div class="cont_img">
                        <img class="img_one" src="img/img_log.png" alt="">
                    </div>
                </div>

                <div id="registro" class="caja registro">
                    <div class="cont_img">
                        <img class="img_two" src="img/image_log2.png" alt="">
                    </div>
                    <div class="cont_form reg">
                        <div class="title_reg">
                            <h2>Unete a Foro</h2>
                            <h4>La Mayor comunidad de foros</h4>
                        </div>
                        <form  action="">
                            <input class="inp_reg" type="text" placeholder="Nick_Name">
                            <input class="inp_reg" type="text" placeholder="Email">
                            <input class="inp_reg" type="text" placeholder="Password">
                            <input class="inp_reg" type="text" placeholder="Repite tu password">
                            <button class="btn_reg">Registrate</button>
                            <span>¿Ya tienes Cuenta?<a class="form_et" href="">Inicia Sesion</a></span>
                        </form>
                        
                    </div> 
                </div>
            </main>
        </div>
        <script src="scrip.js"></script>
</body>
</html>