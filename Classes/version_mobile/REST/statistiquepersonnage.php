<?php

//On sort en cas de paramètre manquant ou invalide


try
{
    include("BDD.php");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$PERSO = $bdd->query('SELECT *
					from personnage
					where Libellé ="'.$_GET['personnage'].'" ');
$perso=$PERSO->fetch();
$PERSO->closeCursor();

$réponse=array('force'=>intval($perso['Force']),'agilite'=>intval($perso['Agilité']),'intelligence'=>intval($perso['Intelligence']),'vitalite'=>intval($perso['Vitalité']));
if(isset($perso['Ressource'])){$réponse['ressource']=intval($perso['Ressource']);}

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}

echo EnJson($réponse,true);
?>