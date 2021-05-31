<?php

include('../BDD.php');

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json");

/// Identification du type de méthode HTTP envoyée par le client
$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "POST" :
        $pass_hache = sha1($_POST['password']);
        // V�rification des identifiants
        $req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :username AND pass = :password');
        $req->execute(array(
            'username' => $_POST['username'],
            'password' => $pass_hache));
        $resultat = $req->fetch();
        if (!$resultat){
            deliver_response(401, "Votre message", "Username ou mot de passe incorrect.");
            $req->closeCursor();
        } else {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['username'] = $_POST['username'];;
            $req->closeCursor();
            // header('Location: ' . $_POST['url'] . '');

            deliver_response(200, "Votre message", "Connexion reussie !");
        }
        /// Envoi de la réponse au Client
        break;
}
/// Envoi de la réponse au Client
function deliver_response($status, $status_message, $data)
{
    /// Paramétrage de l'entête HTTP, suite
    header("HTTP/1.1 $status $status_message");
    /// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    /// Mapping de la réponse au format JSON
    $json_response = json_encode($data);

    echo $json_response;
}


?>