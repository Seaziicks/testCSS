<?php
declare(strict_types=1);
spl_autoload_register('chargerClasse');
session_start();
header("Content-Type:application/json");

/**
 * @param $classname
 */
function chargerClasse($classname)
{
    if (is_file('../Poo/' . $classname . '.php'))
        require '../Poo/' . $classname . '.php';
    elseif (is_file('../Poo/Manager/' . $classname . '.php'))
        require '../Poo/Manager/' . $classname . '.php';
    elseif (is_file('../Poo/Classes/' . $classname . '.php'))
        require '../Poo/Classes/' . $classname . '.php';
}
/// Librairies éventuelles (pour la connexion à la BDD, etc.)
include('../../db.php');

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json");

/// Identification du type de méthode HTTP envoyée par le client
$http_method = $_SERVER['REQUEST_METHOD'];

$EffetMagiqueTableTrContentManager = new EffetMagiqueTableTrContentManager($bdd);

switch ($http_method){
    /// Cas de la méthode GET
    case "GET" :
        /// Récupération des critères de recherche envoyés par le Client
        if (isset($_GET['idEffetMagiqueTableTrContent'])) {
            $effetMagiqueTableTrContent = $EffetMagiqueTableTrContentManager->getEffetMagiqueTableTrContent($_GET['idEffetMagiqueTableTrContent']);

            $matchingData = $effetMagiqueTableTrContent;
            http_response_code(200);
            /// Envoi de la réponse au Client
            deliver_responseRest(200, "effetMagiqueTableTrContent", $matchingData);
        }
        break;

    case "POST":
        if(isset($_GET['EffetMagiqueTableTrContent'])) {
            try {
                $effetMagiqueTableTrContent = json_decode($_GET['EffetMagiqueTableTrContent'])->EffetMagiqueTableTrContent;
                $effetMagiqueTableTrContent->idEffetMagiqueTableTr = $_GET['idEffetMagiqueTableTr'];
                $effetMagiqueTableTrContentAdded = $EffetMagiqueTableTrContentManager->addEffetMagiqueTableTrContent(json_encode($effetMagiqueTableTrContent), $effetMagiqueTableTrContent->idEffetMagiqueTableTr);

                http_response_code(201);
                deliver_responseRest(201, "effetMagiqueTableTrContent added", $effetMagiqueTableTrContentAdded);
            } catch (PDOException $e) {
                deliver_responseRest(400, "effetMagiqueTableTrContent add error in SQL", $sql . "<br>" . $e->getMessage());
            }
        }
        break;
    case "PUT":
        try {
            $effetMagiqueTableTrContent = json_decode($_GET['EffetMagiqueTableTrContent'])->EffetMagiqueTableTrContent;
            $effetMagiqueTableTrContentUpdated = $EffetMagiqueTableTrContentManager->updateEffetMagiqueTableTrContent(json_encode($effetMagiqueTableTrContent));


            http_response_code(202);
            deliver_responseRest(202, "effetMagiqueTableTr modified", $effetMagiqueTableTrContentUpdated);
        } catch (PDOException $e) {
            deliver_responseRest(400, "effetMagiqueTableTr modification error in SQL", $sql . "<br>" . $e->getMessage());
        }
        break;
    case 'DELETE':
        try {
            $effetMagiqueTableTrContent = json_decode($_GET['EffetMagiqueTableTrContent'])->EffetMagiqueTableTrContent;
            $rowCount = $EffetMagiqueTableTrContentManager->deleteEffetMagiqueTableTrContent($effetMagiqueTableTrContent->idEffetMagiqueTableTrContent);

            if( ! $rowCount ) {
                deliver_responseRest(400, "effetMagiqueTableTrContent deletion fail", '');
            } else {
                http_response_code(202);
                deliver_responseRest(202, "effetMagiqueTableTrContent deleted", '');
            }
        } catch (PDOException $e) {
            deliver_responseRest(400, "effetMagiqueTableTrContent deletion error in SQL", $sql . "<br>" . $e->getMessage());
        }
        break;
}
/// Envoi de la réponse au Client
function deliver_responseRest($status, $status_message, $data)
{
    /// Paramétrage de l'entête HTTP, suite
    // header("HTTP/1.1 $status $status_message");
/// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
/// Mapping de la réponse au format JSON
    $json_response = json_encode($response);
    echo $json_response;
}