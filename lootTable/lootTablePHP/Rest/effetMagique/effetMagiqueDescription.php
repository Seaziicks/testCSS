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
$EffetMagiqueDescriptionManager = new EffetMagiqueDescriptionManager($bdd);
switch ($http_method){
    /// Cas de la méthode GET
    case "GET" :
        /// Récupération des critères de recherche envoyés par le Client
        if (!empty($_GET['idEffetMagiqueDescription'])) {
            $effetMagiqueDescriptionQuery = $bdd->query('SELECT *
					from effetMagiqueDescription 
                    where idEffetMagiqueDescription='.$_GET['idEffetMagiqueDescription']);

            $effetMagiqueDescription =  $effetMagiqueDescriptionQuery->fetch(PDO::FETCH_ASSOC);
            $matchingData = $effetMagiqueDescription;
            http_response_code(200);
            /// Envoi de la réponse au Client
            deliver_responseRest(200, "Rarf ...", $matchingData);
        }
        break;

    case "POST":
        try {
            $effetMagiqueDescriptions = json_decode($_GET['EffetMagiqueDescriptions']);
            $effetMagiqueDescriptions = json_decode($_GET['EffetMagiqueDescriptions'])->Descriptions;

            $idDescriptions = '';
            foreach ($effetMagiqueDescriptions as $description) {
                $sql = "INSERT INTO `effetMagiqueDescription` (`idEffetMagique`,`contenu`) 
                                        VALUES (:idEffetMagique, :contenu)";

                $commit = $bdd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
                $commit->bindParam(':idEffetMagique', $effetMagiqueDescriptions->idEffetMagique, PDO::PARAM_INT);
                $commit->bindParam(':contenu', $description, PDO::PARAM_STR);
                $commit->execute();
                $idDescriptions .= $bdd->lastInsertId();
                if ($description != $effetMagiqueDescriptions[count($effetMagiqueDescriptions) - 1]) {
                    $idDescriptions .= ", ";
                }
            }
            $result = $bdd->query('SELECT *
					from effetMagiqueDescription 
                    where idEffetMagiqueDescription in (' . $idDescriptions . ')
                    ');
            $fetchedResult = $result->fetchAll(PDO::FETCH_ASSOC);
            $result->closeCursor();
            $bdd = null;

            http_response_code(201);
            deliver_responseRest(201, "multiple effetMagiqueDescription added", $fetchedResult);
        } catch (PDOException $e) {
            deliver_responseRest(400, "multiple effetMagiqueDescription add error in SQL", $sql . "<br>" . $e->getMessage());
        }
        break;
    case "PUT":
        try {
            $effetMagiqueDescription = json_decode($_GET['EffetMagiqueDescription'])->EffetMagiqueDescription;
            $effetMagiqueDescriptionUpdated = $EffetMagiqueDescriptionManager->updateEffetMagiqueDescription(json_encode($effetMagiqueDescription));


            http_response_code(202);
            deliver_responseRest(202, "effetMagiqueDescription modified", $effetMagiqueDescriptionUpdated);
        } catch (PDOException $e) {
            deliver_responseRest(400, "effetMagiqueDescription modification error in SQL", $sql . "<br>" . $e->getMessage());
        }
        break;
    case 'DELETE':
        try {
            $effetMagiqueDescription = json_decode($_GET['EffetMagiqueDescription'])->EffetMagiqueDescription;
            $rowCount = $EffetMagiqueDescriptionManager->deleteEffetMagiqueDescription($effetMagiqueDescription);

            if( ! $rowCount ) {
                deliver_responseRest(400, "effetMagiqueDescription deletion fail", '');
            } else {
                http_response_code(202);
                deliver_responseRest(202, "effetMagiqueDescription deleted", '');
            }
        } catch (PDOException $e) {
            deliver_responseRest(400, "effetMagiqueDescription deletion error in SQL", $sql . "<br>" . $e->getMessage());
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
