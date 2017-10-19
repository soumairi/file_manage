<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="favicon.ico" />

    <title>Login - INTELCIA</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style type="text/css">
        #particles-js{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 99%;
        }
    </style>
</head>

<body class="pink">
<div id="particles-js"></div>

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form  class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="logologin.svg" alt="" class="responsive-img valign ">
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input name="email"  id="email" type="text" required pattern="^[A-z0-9-_.@]{4,}$">
                    <label for="email" class="center-align">Login</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" name="password" type="password" required pattern="^[A-z0-9-_.@]{6,}$">
                    <label for="password">Mots de pass</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light col s12">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <p class="margin center-align medium-small message" style="display:none"></p>
                </div>
            </div>

        </form>
    </div>
</div>



<!-- ================================================
  Scripts
  ================================================ -->

<script src="particles.js"></script>
<!-- jQuery Library -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.js"></script>
<!--prism-->
<script type="text/javascript" src="js/prism.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.js"></script>

<!-- scripts -->
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script>

</body>

</html>

