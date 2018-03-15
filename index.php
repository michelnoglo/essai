<?php
  require_once "config.php";

if (isset($_SESSION['access_token'])){
    header('Location: home.php');
    exit();
}

  $loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="content/images/favicon.png">
    <title>SUPFile</title>
    <!-- Bootstrap Core CSS -->
    <link href="scripts/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="content/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="content/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="content/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="content/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">

    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="index.html">
                <a href="javascript:void(0)" class="text-center db"><img src="content/images/eliteadmin-logo-dark.png"
                                                                         alt="Home"/>
                    <br/><img src="content/images/eliteadmin-text-dark.png" alt="Home"/></a>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Rester connecter </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i
                                    class="fa fa-lock m-r-5"></i> Mot de passe oublié?</a></div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Se connecter
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                        <div class="social">
                            <a class="btn btn-info  btn-block waves-effect waves-light"
                               style="background-color:#4682b4;border:#4682b4"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;
                                Se connecter avec facebook</a>
                            <a class="btn btn-info  btn-block waves-effect waves-light"
                               onclick="window.location = '<?php echo $loginURL ?>' " style="background-color:#b22222;border:#b22222" target="_blank"><i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;
                                Se connecter avec Google</a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Vous n'avez pas de compte? <a href="javascript:void(0)" id="to-register"
                                                         class="text-primary m-l-5"><b>Créer le !</b></a></p>
                    </div>
                </div>
            </form>
            <form class="form-horizontal form-material" id="registerform" action="index.html">
                <a href="javascript:void(0)" class="text-center db"><img src="content/images/eliteadmin-logo-dark.png"
                                                                         alt="Home"/>
                    <br/><img src="content/images/eliteadmin-text-dark.png" alt="Home"/></a>
                <div class="form-group m-t-40">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="nom" required="" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="prenom" required="" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> J'accepte les <a href="#">conditions d'utilisation de SUPFile</a> </label>
                        </div>
                        </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Créer le compte
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10">
                        <div class="social">
                            <a class="btn btn-info  btn-block waves-effect waves-light"
                               style="background-color:#4682b4;border:#4682b4"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;
                                S'inscrire via facebook</a>
                            <a class="btn btn-info  btn-block waves-effect waves-light"
                               style="background-color:#b22222;border:#b22222"><i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;
                                S'inscrire via Google</a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                     <a href="javascript:void(0)" id="to-login" class="text-primary m-l-5"><b>Connectez-vous à votre compte</b></a>
                    </div>
                </div>

            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Reset
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</section>


<!-- jQuery -->
<script src="content/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="scripts/bootstrap/dist/js/tether.min.js"></script>
<script src="scripts/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="content/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="content/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="scripts/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="scripts/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="scripts/custom.min.js"></script>
<!--Style Switcher -->
<script src="content/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
