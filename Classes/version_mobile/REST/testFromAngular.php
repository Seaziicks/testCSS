<?php
header("Content-Type:application/json");
$http_method = $_SERVER['REQUEST_METHOD'];
include('../BDD.php');

switch ($http_method) {
    /// Cas de la méthode GET
    case "POST" :
        $postedData = file_get_contents('php://input');


//  $effects = json_decode($postedData, true);
        $effects = $_POST;
// $effects = json_decode($_POST);
// print_r($effects);
        $sql = "INSERT INTO testangular (text)
    VALUES ('Test en cours')";
        $bdd->exec($sql);
        $sql = null;

        http_response_code(201);
        echo $_SERVER['REQUEST_METHOD'];
        try {
            // set the PDO error mode to exception
            $sql = "INSERT INTO testangular (text)
    VALUES (" . print_r($_POST) . ")";
            // use exec() because no results are returned
            $bdd->exec($sql);

            $policy = [
                'EffectType' => 'ok',
                'EffectValueMin' => 'ok',
                'EffectValueMax' => 'ok',
                'IDCompetence' => 'ok',
                'IDLauncher' => 'ok',
                'IDRecieiver' => 'ok',
                'NumberOfUse' => 'ok',
                'NumberOfTurn' => 'ok',
                'NumberOfFight' => 'ok',
            ];
            echo json_encode($policy);
            // echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $bdd = null;

}

?>