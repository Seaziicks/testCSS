<?php
include('../BDD.php');


//  $effects = json_decode($postedData, true);
$effects = $_POST;
// $effects = json_decode($_POST);
// print_r($effects);

http_response_code(201);
echo $_SERVER['REQUEST_METHOD'];
try {
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                        IDRecieiver,NumberOfUse,NumberOfTurn,NumberOfFight)
    VALUES (".$effects['EffectType'].",".$effects['EffectValueMin'].",".$effects['EffectValueMax'].",
            ".$effects['IDCompetence'].",".$effects['IDLauncher'].",".$effects['IDRecieiver'].",
            ".$effects['NumberOfUse'].", ".$effects['NumberOfTurn'].",".$effects['NumberOfFight'].")";
    // use exec() because no results are returned
    $bdd->exec($sql);

    $policy = [
        'EffectType' => $effects['EffectType'],
        'EffectValueMin' => $effects['EffectValueMin'],
        'EffectValueMax' => $effects['EffectValueMax'],
        'IDCompetence' => $effects['EffectValueMin'],
        'IDLauncher' => $effects['IDLauncher'],
        'IDRecieiver' => $effects['IDRecieiver'],
        'NumberOfUse' => $effects['NumberOfUse'],
        'NumberOfTurn' => $effects['NumberOfTurn'],
        'NumberOfFight' => $effects['NumberOfFight'],
    ];
    echo json_encode($policy);
    // echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
$bdd = null;



?>