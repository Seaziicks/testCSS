<?php









if(isset($_POST['Modification_demandee'] /*&& $_POST['Modification_demandee']="ok"*/)){
	
	if (isset($id_groupe) && $id_groupe == 0) {
		for($m=1;$m<=5;$m++){
			/*$_POST['new%'.$m.''] = isset($_POST['new%'.$m.'']) ? $_POST['new%'.$m.''] : 'NULL';
			$_POST['newStatistique'.$m.''] = isset($_POST['newStatistique'.$m.'']) ? $_POST['newStatistique'.$m.''] : 'NULL';*/
			if(!isset($_POST['new%'.$m.''])){$_POST['new%'.$m.'']='NULL';}else{$_POST['new%'.$m.'']=1;}
			if(!isset($_POST['newStatistique'.$m.''])){$_POST['newStatistique'.$m.'']='NULL';}
			if(!isset($_POST['newType_calcul'.$m.''])){$_POST['newType_calcul'.$m.'']='NULL';}
			if(!isset($_POST['newCalcul'.$m.'a']) || $_POST['newCalcul'.$m.'a']<0 || empty($_POST['newCalcul'.$m.'a'])){$_POST['newCalcul'.$m.'a']='NULL';}
			if(!isset($_POST['newCalcul'.$m.'b']) || $_POST['newCalcul'.$m.'b']<0 || empty($_POST['newCalcul'.$m.'b'])){$_POST['newCalcul'.$m.'b']='NULL';}
		}
		for($m=1;$m<=2;$m++){
			if(!isset($_POST['newCalculBis'.$m.'a']) || $_POST['newCalculBis'.$m.'a']<0 || empty($_POST['newCalculBis'.$m.'a'])){$_POST['newCalculBis'.$m.'a']='NULL';}
			if(!isset($_POST['newCalculBis'.$m.'b']) || $_POST['newCalculBis'.$m.'b']<0 || empty($_POST['newCalculBis'.$m.'b'])){$_POST['newCalculBis'.$m.'b']='NULL';}
		}
		//echo '<script>alert("'.$_POST['new%1'].'");</script>';
		/*
		$_POST['newStatistiqueBis1'] = isset($_POST['newStatistiqueBis1']) ? $_POST['newStatistiqueBis1'] : 'NULL';
		$_POST['newStatistiqueBis2'] = isset($_POST['newStatistiqueBis2']) ? $_POST['newStatistiqueBis2'] : 'NULL';
		$_POST['new%Bis'] = isset($_POST['new%Bis']) ? $_POST['new%Bis'] : 'NULL';
		*/
		if(!isset($_POST['newStatistiqueBis1'])){$_POST['newStatistiqueBis1']='NULL';}
		if(!isset($_POST['newStatistiqueBis2'])){$_POST['newStatistiqueBis2']='NULL';}
		if(!isset($_POST['new%Bis'])){$_POST['new%Bis']='NULL';}
		
		
		//Partie caractéristiques
		if(!isset($_POST['newCout_En_PA'])){$_POST['newCout_En_PA']='NULL';}
		if(!isset($_POST['newCout_En_Ressource'])){$_POST['newCout_En_Ressource']='NULL';}
		if(!isset($_POST['newRessource'])){$_POST['newRessource']='NULL';}
		if(!isset($_POST['newNiveau_Requis'])){$_POST['newNiveau_Requis']='NULL';}
		if(!isset($_POST['newTempsRechargement'])){$_POST['newTempsRechargement']='NULL';}
		if(!isset($_POST['newDurée'])){$_POST['newDurée']='NULL';}
		if(!isset($_POST['newBonus_Temporaire'])){$_POST['newBonus_Temporaire']='NULL';}
		if(!isset($_POST['newValeur_Temporaire1']) || $_POST['newValeur_Temporaire1']<0 || empty($_POST['newValeur_Temporaire1'])){$_POST['newValeur_Temporaire1']='NULL';}
		if(!isset($_POST['newValeur_Temporaire2']) || $_POST['newValeur_Temporaire2']<0 || empty($_POST['newValeur_Temporaire2'])){$_POST['newValeur_Temporaire2']='NULL';}
		if(!isset($_POST['newStatistique_Temporaire1'])){$_POST['newStatistique_Temporaire1']='NULL';}
		
	
	$req = $bdd->prepare('UPDATE competence SET Description1 = "'.$_POST['newDescription1'].'",Description2 = "'.$_POST['newDescription2'].'",Description3 = "'.$_POST['newDescription3'].'",Description4 = "'.$_POST['newDescription4'].'",Description5 = "'.$_POST['newDescription5'].'",Description6 = "'.$_POST['newDescription6'].'",Effet1 = "'.$_POST['newEffet1'].'",Effet2 = "'.$_POST['newEffet2'].'",Effet3 = "'.$_POST['newEffet3'].'", Effet1Bis = "'.$_POST['newEffet1Bis'].'",Effet2Bis = "'.$_POST['newEffet2Bis'].'",Effet3Bis = "'.$_POST['newEffet3Bis'].'",Fin = "'.$_POST['newFin'].'",Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = "'.$_POST['newStatistique1'].'",Statistique2 = "'.$_POST['newStatistique2'].'",Statistique3 = "'.$_POST['newStatistique3'].'",Statistique4 = "'.$_POST['newStatistique4'].'",Statistique5 = "'.$_POST['newStatistique5'].'",Impact1 = "'.$_POST['newImpact1'].'",Impact2 = "'.$_POST['newImpact2'].'",Impact3 = "'.$_POST['newImpact3'].'",Impact4 = "'.$_POST['newImpact4'].'",Impact5 = "'.$_POST['newImpact5'].'",Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = "'.$_POST['newStatistiqueBis1'].'",Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = "'.$_POST['newStatistiqueBis2'].'",ImpactBis = "'.$_POST['newImpactBis'].'",Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].',Libellé = '.$_POST['newLibelle'].',Image = '.$_POST['newImage'].',Cout_En_PA = '.$_POST['newCout_En_PA'].',Cout_En_Ressource = '.$_POST['newCout_En_Ressource'].',Ressource = '.$_POST['newRessource'].',Entete = '.$_POST['newEntete'].',Exemple = '.$_POST['newExemple'].',Niveau_Requis = '.$_POST['newNiveau_Requis'].',TempsRechargement = '.$_POST['newTempsRechargement'].',Durée = '.$_POST['newDurée'].',Bonus_Temporaire = '.$_POST['newBonus_Temporaire'].',Valeur_Temporaire1 = '.$_POST['newValeur_Temporaire1'].',Valeur_Temporaire2 = '.$_POST['newValeur_Temporaire2'].',Statistique_Temporaire1 = '.$_POST['newStatistique_Temporaire1'].' WHERE Id_Competence = :id');

	$req->execute(array('id' => $_POST['Id_Competence']));
	
	}
	
	
	
	/*
	
	$req = $bdd->prepare('UPDATE competence SET Description1 = "'.$_POST['newDescription1'].'",Description2 = "'.$_POST['newDescription2'].'",Description3 = "'.$_POST['newDescription3'].'",Description4 = "'.$_POST['newDescription4'].'",Description5 = "'.$_POST['newDescription5'].'",Description6 = "'.$_POST['newDescription6'].'",Effet1 = "'.$_POST['newEffet1'].'",Effet2 = "'.$_POST['newEffet2'].'",Effet3 = "'.$_POST['newEffet3'].'", Effet1Bis = "'.$_POST['newEffet1Bis'].'",Effet2Bis = "'.$_POST['newEffet2Bis'].'",Effet3Bis = "'.$_POST['newEffet3Bis'].'",Fin = "'.$_POST['newFin'].'",Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = "'.$_POST['newStatistique1'].'",Statistique2 = "'.$_POST['newStatistique2'].'",Statistique3 = "'.$_POST['newStatistique3'].'",Statistique4 = "'.$_POST['newStatistique4'].'",Statistique5 = "'.$_POST['newStatistique5'].'",Impact1 = "'.$_POST['newImpact1'].'",Impact2 = "'.$_POST['newImpact2'].'",Impact3 = "'.$_POST['newImpact3'].'",Impact4 = "'.$_POST['newImpact4'].'",Impact5 = "'.$_POST['newImpact5'].'",Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = "'.$_POST['newStatistiqueBis1'].'",Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = "'.$_POST['newStatistiqueBis2'].'",ImpactBis = "'.$_POST['newImpactBis'].'",Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].',Libellé = '.$_POST['newLibelle'].',Image = '.$_POST['newImage'].',Cout_En_PA = '.$_POST['newCout_En_PA'].',Cout_En_Ressource = '.$_POST['newCout_En_Ressource'].',Ressource = '.$_POST['newRessource'].',Entete = '.$_POST['newEntete'].',Exemple = '.$_POST['newExemple'].',Niveau_Requis = '.$_POST['newNiveau_Requis'].',TempsRechargement = '.$_POST['newTempsRechargement'].',Durée = '.$_POST['newDurée'].',newBonus_Temporaire = '.$_POST['Bonus_Temporaire'].',Valeur_Temporaire1 = '.$_POST['newValeur_Temporaire1'].',Valeur_Temporaire2 = '.$_POST['newValeur_Temporaire2'].',newStatistique_Temporaire1 = '.$_POST['Statistique_Temporaire1'].' WHERE Id_Competence = :id');
	
	
	
	
	
	,Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].'
	
	$req = $bdd->prepare('UPDATE competence SET Description1 = "'.$_POST['newDescription1'].'",Description2 = "'.$_POST['newDescription2'].'",Description3 = "'.$_POST['newDescription3'].'",Description4 = "'.$_POST['newDescription4'].'",Description5 = "'.$_POST['newDescription5'].'",Description6 = "'.$_POST['newDescription6'].'",Effet1 = "'.$_POST['newEffet1'].'",Effet2 = "'.$_POST['newEffet2'].'",Effet3 = "'.$_POST['newEffet3'].'", Effet1Bis = "'.$_POST['newEffet1Bis'].'",Effet2Bis = "'.$_POST['newEffet2Bis'].'",Effet3Bis = "'.$_POST['newEffet3Bis'].'",Fin = "'.$_POST['newFin'].'",Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = "'.$_POST['newStatistique1'].'",Statistique2 = "'.$_POST['newStatistique2'].'",Statistique3 = "'.$_POST['newStatistique3'].'",Statistique4 = "'.$_POST['newStatistique4'].'",Statistique5 = "'.$_POST['newStatistique5'].'",Impact1 = "'.$_POST['newImpact1'].'",Impact2 = "'.$_POST['newImpact2'].'",Impact3 = "'.$_POST['newImpact3'].'",Impact4 = "'.$_POST['newImpact4'].'",Impact5 = "'.$_POST['newImpact5'].'",Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = "'.$_POST['newStatistiqueBis1'].'",Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = "'.$_POST['newStatistiqueBis2'].'",ImpactBis = "'.$_POST['newImpactBis'].'" WHERE Id_Competence = :id');
	
	
	
	*/
	
	
	
	
	
	
	
	
	
	/*
	,Description2 = '.$_POST['newDescription2'].',Description3 = '.$_POST['newDescription3'].',Description4 = '.$_POST['newDescription4'].',Description5 = '.$_POST['newDescription5'].',Description6 = '.$_POST['newDescription6'].',Effet1 = '.$_POST['newEffet1'].',Effet2 = '.$_POST['newEffet2'].',Effet3 = '.$_POST['newEffet3'].', Effet1Bis = '.$_POST['newEffet1Bis'].',Effet2Bis = '.$_POST['newEffet2Bis'].',Effet3Bis = '.$_POST['newEffet3Bis'].',Fin = '.$_POST['newFin'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = '.$_POST['newStatistique1'].',Statistique2 = '.$_POST['newStatistique2'].',Statistique3 = '.$_POST['newStatistique3'].',Statistique4 = '.$_POST['newStatistique4'].',Statistique5 = '.$_POST['newStatistique5'].',Impact1 = '.$_POST['newImpact1'].',Impact2 = '.$_POST['newImpact2'].',Impact3 = '.$_POST['newImpact3'].',Impact4 = '.$_POST['newImpact4'].',Impact5 = '.$_POST['newImpact5'].',%1 = '.$_POST['new%1'].',%2 = '.$_POST['new%2'].',%3 = '.$_POST['new%3'].',%4 = '.$_POST['new%4'].',%5 = '.$_POST['new%5'].',Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = '.$_POST['newStatistiqueBis1'].',Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = '.$_POST['newStatistiqueBis2'].',ImpactBis = '.$_POST['newImpactBis'].',%Bis = '.$_POST['new%Bis'].'
	*/
	
	
	
	
	
}
	


?>