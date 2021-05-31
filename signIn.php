<?php
declare(strict_types=1);
session_start();


include ('BDD.php');

?>

<html lang="fr">

<head>
    <!-- ===================    CSS    =================== -->
    <?php include('css/BootstrapCSSImport.php'); ?>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/test.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/creation_item.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/signIn.css" type="text/css" media="screen"/>

    <!-- ===================    Js    =================== -->

    <!-- ===================    Icons    =================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest - Item creation</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>
</head>
<body>
<div class="global-wrapper">
    <?php include('navbar.php');?>
    <main class="wrapper">
        <div class="background-image"></div>
        <div class="signInContainer">
            <span>
                <img class="logo" src="css/images/scroll-quill.png" alt="logo"/>
            </span>
            <span class="form-title">Log In</span>


            <form class="singInForm">
                <div class="mat_input_logo">
                    <div class="input_logo"><i class="material-icons">account_circle</i></div>
                    <div class="div_input">
                        <label for="usernameInput">
                            <input placeholder="Username" class="usernameInput" id="usernameInput"/>
                        </label>
                    </div>
                </div>

                <div class="mat_input_logo">
                    <div class="input_logo"><i class="material-icons">password</i></div>
                    <div class="div_input">
                        <label for="passwordInput">
                            <input type="password" class="password" placeholder="Password" name="passwordInput" id="passwordInput"/>
                        </label>
                    </div>
                </div>

                <div>
                    <span id="connectionError" style="color:orangered"></span>
                </div>

                <button type="button" class="signInButton" id="signInButton"
                        onclick="connect('<?php in_array('previousUrl', $_POST) ? print_r($_POST['previousUrl']) : print_r('index.php') ?>')">
                    Sign In </button>
            </form>
        </div>
    </main>
    <?php include("./footer.php") ?>
</div>

<?php include("./css/BootstrapJSImport.php") ?>
</body>

</html>

<script>
    function connect(previousURL) {

        console.log(document.getElementById("usernameInput").value);
        if (!(document.getElementById("usernameInput").value && document.getElementById("passwordInput").value))
            document.getElementById("connectionError").innerHTML = "Username ou mot de passe manquant.";
        else {
            username = document.getElementById("usernameInput").value;
            password = document.getElementById("passwordInput").value
            //Cr?ation de l'objet XMLHTTPRequest
            XHR = new XMLHttpRequest();

            if (!XHR) {
                return false;
            }

            //URL du script de sauvegarde auquel on passe la valeur ? modifier
            XHR.open("POST", "Rest/connection.php", false);
            XHR.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            //On se sert de l'?v?nement OnReadyStateChange pour supprimer l'input et le replacer par son contenu
            XHR.onreadystatechange = function () {

                //Si le chargement est termin?
                if (XHR.readyState === 4) {

                    console.log(XHR.responseText);

                    const data = JSON.parse(XHR.responseText);
                    //On recupere les donnees
                    console.log(XHR.status);
                    console.log(data);

                    if (XHR.status === 200)
                        window.location.href = previousURL;
                    else {
                        document.getElementById("connectionError").innerHTML = "Username ou mot de passe incorrect";
                    }
                }
            }

            //Envoi de la requ?te
            XHR.send("username=" + username + "&password=" + password);
        }

    }

    document.getElementById("passwordInput").addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("signInButton").click();
        }
    });

    document.getElementById("usernameInput").addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("signInButton").click();
        }
    });
</script>