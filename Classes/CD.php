<?php

//On sort en cas de paramètre manquant ou invalide

if(empty($_GET['id']) or !is_numeric($_GET['id']))
{
    exit;
}
try
{
    include("BDD.php");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
session_start();

if(isset($_SESSION['pseudo'])){
		// Recherche du rang de l'utilisateur pour savoir si la demande en cours doit être accomplie.

		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué	
}
		
if (isset($id_groupe) && $id_groupe == 0) {

$id = $_GET['id'];
$CD = $bdd->query('SELECT TempsRechargement,Durée,Cooldown,Bonus_Temporaire,Type_Calcul_Temporaire,Valeur_Temporaire1,Valeur_Temporaire2,Statistique_Temporaire1,Niveau,Cout_En_PA,Libellé,Cout_En_Ressource,Ressource
					from competence c
					where c.id_competence ='.$id.' ');
$competence=$CD->fetch();
$competenceb=$competence;
$CD->closeCursor();






$PERSO = $bdd->query('SELECT PA_Actuel,Ressource_Actuelle,PDV_Actuel
					from personnage
					where Libellé ="'.$_GET['personnage'].'" ');
$perso=$PERSO->fetch();
$PERSO->closeCursor();		
				
				
				
																										// Cas Classique
				
if($competence['Cooldown']==0 && $perso['PA_Actuel']-$competence['Cout_En_PA']>=0 && $perso['Ressource_Actuelle']-$competence['Cout_En_Ressource']>=0 && $_GET['personnage']!='Manipulateur de Sang' ){
	
																										//Cooldown
$req = $bdd->prepare('UPDATE competence SET Cooldown = '.$competence['TempsRechargement'].' WHERE id_competence = :id');

	$req->execute(array('id' => $_GET['id']));

																										//Coût en PA
	$MAJPA = $bdd->prepare('UPDATE personnage SET PA_Actuel = (PA_Actuel-'.intval($competence['Cout_En_PA']).') WHERE Libellé = :personnage');
	$MAJPA->execute(array('personnage' => $_GET['personnage']));
	
																										//Coût en ressource
	$MAJRessource = $bdd->prepare('UPDATE personnage SET Ressource_Actuelle = (Ressource_Actuelle-'.intval($competence['Cout_En_Ressource']).') WHERE Libellé = :personnage');
	$MAJRessource->execute(array('personnage' => $_GET['personnage']));
	if($_GET['personnage']=='Démoniste' && $id != 93){
		$Carapace = $bdd->query('SELECT TempsRechargement,Durée,Cooldown
					from competence
					where id_competence = 93 ');
		$carapace=$Carapace->fetch();
		$Carapace->closeCursor();
		if($carapace['Durée']+$carapace['Cooldown']-$carapace['TempsRechargement']>0){
			$RéductionCoutRessource = $bdd->prepare('UPDATE personnage SET Ressource_Actuelle = (Ressource_Actuelle+'.round((intval($competence['Cout_En_Ressource'])*0.25)).') WHERE Libellé = :personnage');
			$RéductionCoutRessource->execute(array('personnage' => $_GET['personnage']));
		}
	}

}



																										// Cas Manipulateur de Sang
if($competence['Cooldown']==0 && $perso['PA_Actuel']-$competence['Cout_En_PA']>=0  && $_GET['personnage']=='Manipulateur de Sang' ){
$req = $bdd->prepare('UPDATE competence SET Cooldown = '.$competence['TempsRechargement'].' WHERE id_competence = :id');

	$req->execute(array('id' => $_GET['id']));

	
	$MAJPA = $bdd->prepare('UPDATE personnage SET PA_Actuel = (PA_Actuel-'.intval($competence['Cout_En_PA']).') WHERE Libellé = :personnage');
	$MAJPA->execute(array('personnage' => $_GET['personnage']));
	
	
	if($perso['Ressource_Actuelle']-$competence['Cout_En_Ressource']>=0){
		$MAJRessource = $bdd->prepare('UPDATE personnage SET Ressource_Actuelle = (Ressource_Actuelle-'.intval($competence['Cout_En_Ressource']).') WHERE Libellé = :personnage');
		$MAJRessource->execute(array('personnage' => $_GET['personnage']));
	}else if($perso['Ressource_Actuelle']-$competence['Cout_En_Ressource']<0 && $perso['PDV_Actuel']-$competence['Cout_En_Ressource']>0){
		
		$MAJPDV = $bdd->prepare('UPDATE personnage SET PDV_Actuel = (PDV_Actuel+(Ressource_Actuelle-'.intval($competence['Cout_En_Ressource']).')) WHERE Libellé = :personnage');
		$MAJPDV->execute(array('personnage' => $_GET['personnage']));
		
		$MAJRessource = $bdd->prepare('UPDATE personnage SET Ressource_Actuelle = 0 WHERE Libellé = :personnage');
		$MAJRessource->execute(array('personnage' => $_GET['personnage']));
	}
	

}











	//Réponse de retour
	$réponse=array('TempsRechargement'=>intval($competence['TempsRechargement']),'Durée'=>intval($competence['Durée']),'CD'=>intval($competence['Cooldown']),'PA'=>intval($competence['Cout_En_PA']),'PA_Actuel'=>intval($perso['PA_Actuel']),'Compétence'=>$competence['Libellé'],'Autorisation'=> TRUE);

	// Ajout du bonus temporaire si il existe
	if(isset($competence['Bonus_Temporaire'])){
		$f=1;
		include('statbis.php');
		if($competence['Type_Calcul_Temporaire']==1){
			
			$ValeurBonus = $competence['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competence['Valeur_Temporaire2']));
		}elseif($competence['Type_Calcul_Temporaire']==2){
			
			$ValeurBonus = $competence['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competence['Valeur_Temporaire2']))+$competence['Valeur_Temporaire1']+(round((float)${'stat'.($f+1)}/$competence['Valeur_Temporaire2']));
		}
		$réponse['Bonus']=ucfirst($competence['Bonus_Temporaire']);
		$réponse['ValeurBonus']=$ValeurBonus;
	}
	
	// Ajout du coût en ressource si il existe
	if(isset($competence['Ressource'])){
		$réponse['Ressource']=$competence['Ressource'];
		$réponse['CoutRessource']=intval($competence['Cout_En_Ressource']);
	}

	
	
		
function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
$recherche->closeCursor();
echo EnJson($réponse,true);
}else{
	function EnJson($arr , $format = 0){
		header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
		if($format){
		return json_encode($arr,448);
		}else{
		return json_encode($arr);  
    }
	}
	$réponse=array('Autorisation'=> FALSE);
	echo EnJson($réponse,true);
}

?>