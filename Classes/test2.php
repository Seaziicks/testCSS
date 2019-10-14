<?php









if(isset($_POST['Modification_demandee'] /*&& $_POST['Modification_demandee']="ok"*/)){
	
	if (isset($id_groupe) && $id_groupe == 0) {
		for($m=1;$m<=5;$m++){
			//Gestion des valeurs textuelles
			if(!isset($_POST['newDescription'.$m.''])  || empty($_POST['newDescription'.$m.'']) || empty($_POST['newStatistique'.$m.''])){$_POST['newDescription'.$m.'']='NULL';}else{$_POST['newDescription'.$m.'']='\''.str_replace("'", "\'",$_POST['newDescription'.$m.'']).'\'';}
			if(!isset($_POST['newStatistique'.$m.'']) || $_POST['newStatistique'.$m.'']=='NULL'){$_POST['newStatistique'.$m.'']='NULL';}else{$_POST['newStatistique'.$m.'']='\''.str_replace("'", "\'",$_POST['newStatistique'.$m.'']).'\'';}
			// echo "<script>alert('".$_POST['newImpact'.$m.'']."');</script>";
			if(!isset($_POST['newImpact'.$m.''])){$_POST['newImpact'.$m.'']='NULL';}else{$_POST['newImpact'.$m.'']='\''.str_replace("'", "\'",$_POST['newImpact'.$m.'']).'\'';}
			
			
			
			/*$_POST['new%'.$m.''] = isset($_POST['new%'.$m.'']) ? $_POST['new%'.$m.''] : 'NULL';
			$_POST['newStatistique'.$m.''] = isset($_POST['newStatistique'.$m.'']) ? $_POST['newStatistique'.$m.''] : 'NULL';*/
			//Gestion des valeurs bouléennes
			if(!isset($_POST['new%'.$m.''])){$_POST['new%'.$m.'']='NULL';}else{$_POST['new%'.$m.'']=1;}
			
			//Gestion des valeurs numériques
			// if(!isset($_POST['newStatistique'.$m.''])){$_POST['newStatistique'.$m.'']='NULL';}
			if(!isset($_POST['newType_calcul'.$m.''])){$_POST['newType_calcul'.$m.'']='NULL';}
			
			if($_POST['newCalcul'.$m.'a']==='0'){$_POST['newCalcul'.$m.'a']='transition';}

			if(!isset($_POST['newCalcul'.$m.'a']) || empty($_POST['newCalcul'.$m.'a'])){$_POST['newCalcul'.$m.'a']='NULL';}
			if($_POST['newCalcul'.$m.'a']=='transition'){$_POST['newCalcul'.$m.'a']='0';}
			if(!isset($_POST['newCalcul'.$m.'b']) || empty($_POST['newCalcul'.$m.'b'])){$_POST['newCalcul'.$m.'b']='NULL';}
			
			if(!isset($_POST['newNombreAmplitude'.$m.'']) || empty($_POST['newNombreAmplitude'.$m.'']) || $_POST['newNombreAmplitude'.$m.'']==0){$_POST['newNombreAmplitude'.$m.'']='NULL';}
			if(!isset($_POST['newAmplitude'.$m.'']) || empty($_POST['newAmplitude'.$m.'']) || $_POST['newNombreAmplitude'.$m.'']==0){$_POST['newAmplitude'.$m.'']='NULL';}
		}
		for($m=1;$m<=2;$m++){
			if(!isset($_POST['newStatistiqueBis'.$m.'']) || empty($_POST['newStatistiqueBis'.$m.'']) || $_POST['newStatistiqueBis'.$m.'']=='NULL'){$_POST['newStatistiqueBis'.$m.'']='NULL';}else{$_POST['newStatistiqueBis'.$m.'']='\''.str_replace("'", "\'",$_POST['newStatistiqueBis'.$m.'']).'\'';}
			if(!isset($_POST['newType_calculBis'.$m.''])){$_POST['newType_calculBis'.$m.'']='NULL';}
			if(isset($_POST['newCalculBis'.$m.'a']) && $_POST['newCalculBis'.$m.'a']==='0'){$_POST['newCalculBis'.$m.'a']='transition';}
			if(!isset($_POST['newCalculBis'.$m.'a']) || $_POST['newCalculBis'.$m.'a']<0 || empty($_POST['newCalculBis'.$m.'a'])){$_POST['newCalculBis'.$m.'a']='NULL';}
			if($_POST['newCalculBis'.$m.'a']=='transition'){$_POST['newCalculBis'.$m.'a']='0';}
			if(!isset($_POST['newCalculBis'.$m.'b']) || empty($_POST['newCalculBis'.$m.'b'])){$_POST['newCalculBis'.$m.'b']='NULL';}
		}
		for($m=1;$m<=3;$m++){
			if(!isset($_POST['newEffet'.$m.'']) || empty($_POST['newEffet'.$m.''])){$_POST['newEffet'.$m.'']='NULL';}else{$_POST['newEffet'.$m.'']='\''.str_replace("'", "\'",$_POST['newEffet'.$m.'']).'\'';}
			if(!isset($_POST['newEffet'.$m.'Bis']) || empty($_POST['newEffet'.$m.'Bis'])){$_POST['newEffet'.$m.'Bis']='NULL';}else{$_POST['newEffet'.$m.'Bis']='\''.str_replace("'", "\'",$_POST['newEffet'.$m.'Bis']).'\'';}
		}
		//echo '<script>alert("'.$_POST['new%1'].'");</script>';
		/*
		$_POST['newStatistiqueBis1'] = isset($_POST['newStatistiqueBis1']) ? $_POST['newStatistiqueBis1'] : 'NULL';
		$_POST['newStatistiqueBis2'] = isset($_POST['newStatistiqueBis2']) ? $_POST['newStatistiqueBis2'] : 'NULL';
		$_POST['new%Bis'] = isset($_POST['new%Bis']) ? $_POST['new%Bis'] : 'NULL';
		*/
		
		//Gestion des valeurs textuelles
		if(!isset($_POST['newDescription6'])  || empty($_POST['newDescription6'])){$_POST['newDescription6']='NULL';}else{$_POST['newDescription6']='\''.str_replace("'", "\'",$_POST['newDescription6']).'\'';}
		if(!isset($_POST['newFin']) || empty($_POST['newFin'])){$_POST['newFin']='NULL';}else{$_POST['newFin']='\''.str_replace("'", "\'",$_POST['newFin']).'\'';}
		if(!isset($_POST['newImpactBis']) || empty($_POST['newImpactBis'])){$_POST['newImpactBis']='NULL';}else{$_POST['newImpactBis']='\''.str_replace("'", "\'",$_POST['newImpactBis']).'\'';}
		

		if(!isset($_POST['new%Bis'])){$_POST['new%Bis']='NULL';}else{$_POST['new%Bis']=1;}
		
		
		//Partie caractéristiques
		if(!isset($_POST['newLibelle'])  || empty($_POST['newLibelle'])){$_POST['newLibelle']='NULL';}else{$_POST['newLibelle']='\''.str_replace("'", "\'",$_POST['newLibelle']).'\'';}
		if(!isset($_POST['newImage'])  || empty($_POST['newImage'])){$_POST['newImage']='NULL';}else{$_POST['newImage']='\''.str_replace("'", "\'",$_POST['newImage']).'\'';}
		if(!isset($_POST['newCout_En_PA']) || empty($_POST['newCout_En_PA'])){$_POST['newCout_En_PA']='NULL';}
		if(!isset($_POST['newCout_En_Ressource']) || empty($_POST['newCout_En_Ressource'])){$_POST['newCout_En_Ressource']='NULL';}
		if(!isset($_POST['newRessource'])  || empty($_POST['newRessource'])){$_POST['newRessource']='NULL';}else{$_POST['newRessource']='\''.str_replace("'", "\'",$_POST['newRessource']).'\'';}
		if(!isset($_POST['newEntete'])  || empty($_POST['newEntete'])){$_POST['newEntete']='NULL';}else{$_POST['newEntete']='\''.str_replace("'", "\'",$_POST['newEntete']).'\'';}
		if(!isset($_POST['newExemple'])  || empty($_POST['newExemple'])){$_POST['newExemple']='NULL';}else{$_POST['newExemple']='\''.str_replace("'", "\'",$_POST['newExemple']).'\'';}
		if(!isset($_POST['newNiveau_Requis']) || empty($_POST['newNiveau_Requis'])){$_POST['newNiveau_Requis']='NULL';}
		if(!isset($_POST['newTempsRechargement']) || empty($_POST['newTempsRechargement'])){$_POST['newTempsRechargement']='NULL';}
		if(!isset($_POST['newDurée']) || empty($_POST['newDurée'])){$_POST['newDurée']='NULL';}
		if(!isset($_POST['newBonus_Temporaire'])  || empty($_POST['newBonus_Temporaire'])){$_POST['newBonus_Temporaire']='NULL';}else{$_POST['newBonus_Temporaire']='\''.str_replace("'", "\'",$_POST['newBonus_Temporaire']).'\'';}
		if(!isset($_POST['newValeur_Temporaire1']) || $_POST['newValeur_Temporaire1']<0 || empty($_POST['newValeur_Temporaire1'])){$_POST['newValeur_Temporaire1']='NULL';}
		if(!isset($_POST['newValeur_Temporaire2']) || empty($_POST['newValeur_Temporaire2'])){$_POST['newValeur_Temporaire2']='NULL';}
		if(!isset($_POST['newStatistique_Temporaire1'])  || empty($_POST['newStatistique_Temporaire1'])){$_POST['newStatistique_Temporaire1']='NULL';}else{$_POST['newStatistique_Temporaire1']='\''.str_replace("'", "\'",$_POST['newStatistique_Temporaire1']).'\'';}
		
		
	
			
	try{
	$req = $bdd->prepare('UPDATE competence SET Description1 = '.$_POST['newDescription1'].',Description2 = '.$_POST['newDescription2'].',
	Description3 = '.$_POST['newDescription3'].',Description4 = '.$_POST['newDescription4'].',Description5 = '.$_POST['newDescription5'].',
	Description6 = '.$_POST['newDescription6'].',Effet1 = '.$_POST['newEffet1'].',Effet2 = '.$_POST['newEffet2'].',Effet3 = '.$_POST['newEffet3'].', 
	Effet1Bis = '.$_POST['newEffet1Bis'].',Effet2Bis = '.$_POST['newEffet2Bis'].',Effet3Bis = '.$_POST['newEffet3Bis'].',Fin = '.$_POST['newFin'].',
	Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',
	Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',
	Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',
	Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',
	Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = '.$_POST['newStatistique1'].',Statistique2 = '.$_POST['newStatistique2'].',
	Statistique3 = '.$_POST['newStatistique3'].',Statistique4 = '.$_POST['newStatistique4'].',Statistique5 = '.$_POST['newStatistique5'].',Impact1 = '.$_POST['newImpact1'].',
	Impact2 = '.$_POST['newImpact2'].',Impact3 = '.$_POST['newImpact3'].',Impact4 = '.$_POST['newImpact4'].',Impact5 = '.$_POST['newImpact5'].',
	Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',
	StatistiqueBis1 = '.$_POST['newStatistiqueBis1'].',Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',
	CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = '.$_POST['newStatistiqueBis2'].',ImpactBis = '.$_POST['newImpactBis'].',
	Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',
	Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].',Libellé = '.$_POST['newLibelle'].',Image = '.$_POST['newImage'].',
	Cout_En_PA = '.$_POST['newCout_En_PA'].',Cout_En_Ressource = '.$_POST['newCout_En_Ressource'].',Ressource = '.$_POST['newRessource'].',
	Exemple = '.$_POST['newExemple'].',Niveau_Requis = '.$_POST['newNiveau_Requis'].',TempsRechargement = '.$_POST['newTempsRechargement'].',
	Bonus_Temporaire = '.$_POST['newBonus_Temporaire'].',Valeur_Temporaire1 = '.$_POST['newValeur_Temporaire1'].',
	Valeur_Temporaire2 = '.$_POST['newValeur_Temporaire2'].',Statistique_Temporaire1 = '.$_POST['newStatistique_Temporaire1'].',
	Durée = '.$_POST['newDurée'].',Entete = '.$_POST['newEntete'].',Nombre_Amplitude1 = '.$_POST['newNombreAmplitude1'].',
	Nombre_Amplitude2 = '.$_POST['newNombreAmplitude2'].',Nombre_Amplitude3 = '.$_POST['newNombreAmplitude3'].',
	Nombre_Amplitude4 = '.$_POST['newNombreAmplitude4'].',Nombre_Amplitude5 = '.$_POST['newNombreAmplitude5'].',Amplitude1 = '.$_POST['newAmplitude1'].',
	Amplitude2 = '.$_POST['newAmplitude2'].',Amplitude3 = '.$_POST['newAmplitude3'].',Amplitude4 = '.$_POST['newAmplitude4'].',Amplitude5 = '.$_POST['newAmplitude5'].',
	NumEffet = '.$_POST['newNumEffet'].' WHERE Id_Competence = :id');

	$req->execute(array('id' => $_POST['Id_Competence']));
	echo "\nPDO::errorCode(): ", $req->errorCode() . "<br />";
	echo "\nPDO::errorInfo():\n";
   print_r($req->errorInfo());
}catch(Exception $e){
		
        die('Erreur : '.$e->getMessage());
}

	}
	
	
	
	/*
	
	$req = $bdd->prepare('UPDATE competence SET Description1 = '.$_POST['newDescription1'].',Description2 = '.$_POST['newDescription2'].',Description3 = '.$_POST['newDescription3'].',Description4 = '.$_POST['newDescription4'].',Description5 = '.$_POST['newDescription5'].',Description6 = '.$_POST['newDescription6'].',Effet1 = '.$_POST['newEffet1'].',Effet2 = '.$_POST['newEffet2'].',Effet3 = '.$_POST['newEffet3'].', Effet1Bis = '.$_POST['newEffet1Bis'].',Effet2Bis = '.$_POST['newEffet2Bis'].',Effet3Bis = '.$_POST['newEffet3Bis'].',Fin = '.$_POST['newFin'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = '.$_POST['newStatistique1'].',Statistique2 = '.$_POST['newStatistique2'].',Statistique3 = '.$_POST['newStatistique3'].',Statistique4 = '.$_POST['newStatistique4'].',Statistique5 = '.$_POST['newStatistique5'].',Impact1 = '.$_POST['newImpact1'].',Impact2 = '.$_POST['newImpact2'].',Impact3 = '.$_POST['newImpact3'].',Impact4 = '.$_POST['newImpact4'].',Impact5 = '.$_POST['newImpact5'].',Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = '.$_POST['newStatistiqueBis1'].',Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = '.$_POST['newStatistiqueBis2'].',ImpactBis = '.$_POST['newImpactBis'].',Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].',Libellé = '.$_POST['newLibelle'].',Image = '.$_POST['newImage'].',Cout_En_PA = '.$_POST['newCout_En_PA'].',Cout_En_Ressource = '.$_POST['newCout_En_Ressource'].',Ressource = '.$_POST['newRessource'].',Entete = '.$_POST['newEntete'].',Exemple = '.$_POST['newExemple'].',Niveau_Requis = '.$_POST['newNiveau_Requis'].',TempsRechargement = '.$_POST['newTempsRechargement'].',Durée = '.$_POST['newDurée'].',Bonus_Temporaire = '.$_POST['newBonus_Temporaire'].',Valeur_Temporaire1 = '.$_POST['newValeur_Temporaire1'].',Valeur_Temporaire2 = '.$_POST['newValeur_Temporaire2'].',Statistique_Temporaire1 = '.$_POST['newStatistique_Temporaire1'].' WHERE Id_Competence = :id');
	
	
	
	
	
	,Pourcentage1 = '.$_POST['new%1'].',Pourcentage2 = '.$_POST['new%2'].',Pourcentage3 = '.$_POST['new%3'].',Pourcentage4 = '.$_POST['new%4'].',Pourcentage5 = '.$_POST['new%5'].',PourcentageBis = '.$_POST['new%Bis'].'
	
	$req = $bdd->prepare('UPDATE competence SET Description1 = "'.$_POST['newDescription1'].'",Description2 = "'.$_POST['newDescription2'].'",Description3 = "'.$_POST['newDescription3'].'",Description4 = "'.$_POST['newDescription4'].'",Description5 = "'.$_POST['newDescription5'].'",Description6 = "'.$_POST['newDescription6'].'",Effet1 = "'.$_POST['newEffet1'].'",Effet2 = "'.$_POST['newEffet2'].'",Effet3 = "'.$_POST['newEffet3'].'", Effet1Bis = "'.$_POST['newEffet1Bis'].'",Effet2Bis = "'.$_POST['newEffet2Bis'].'",Effet3Bis = "'.$_POST['newEffet3Bis'].'",Fin = "'.$_POST['newFin'].'",Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = "'.$_POST['newStatistique1'].'",Statistique2 = "'.$_POST['newStatistique2'].'",Statistique3 = "'.$_POST['newStatistique3'].'",Statistique4 = "'.$_POST['newStatistique4'].'",Statistique5 = "'.$_POST['newStatistique5'].'",Impact1 = "'.$_POST['newImpact1'].'",Impact2 = "'.$_POST['newImpact2'].'",Impact3 = "'.$_POST['newImpact3'].'",Impact4 = "'.$_POST['newImpact4'].'",Impact5 = "'.$_POST['newImpact5'].'",Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = "'.$_POST['newStatistiqueBis1'].'",Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = "'.$_POST['newStatistiqueBis2'].'",ImpactBis = "'.$_POST['newImpactBis'].'" WHERE Id_Competence = :id');
	
	
	
	*/
	
	
	
	
	
	
	
	
	
	/*
	,Description2 = '.$_POST['newDescription2'].',Description3 = '.$_POST['newDescription3'].',Description4 = '.$_POST['newDescription4'].',Description5 = '.$_POST['newDescription5'].',Description6 = '.$_POST['newDescription6'].',Effet1 = '.$_POST['newEffet1'].',Effet2 = '.$_POST['newEffet2'].',Effet3 = '.$_POST['newEffet3'].', Effet1Bis = '.$_POST['newEffet1Bis'].',Effet2Bis = '.$_POST['newEffet2Bis'].',Effet3Bis = '.$_POST['newEffet3Bis'].',Fin = '.$_POST['newFin'].',Type_calcul1 = '.$_POST['newType_calcul1'].',Type_calcul2 = '.$_POST['newType_calcul2'].',Type_calcul3 = '.$_POST['newType_calcul3'].',Type_calcul4 = '.$_POST['newType_calcul4'].',Type_calcul5 = '.$_POST['newType_calcul5'].',Calcul1a = '.$_POST['newCalcul1a'].',Calcul2a = '.$_POST['newCalcul2a'].',Calcul3a = '.$_POST['newCalcul3a'].',Calcul4a = '.$_POST['newCalcul4a'].',Calcul5a = '.$_POST['newCalcul5a'].',Calcul1b = '.$_POST['newCalcul1b'].',Calcul2b = '.$_POST['newCalcul2b'].',Calcul3b = '.$_POST['newCalcul3b'].',Calcul4b = '.$_POST['newCalcul4b'].',Calcul5b = '.$_POST['newCalcul5b'].',Statistique1 = '.$_POST['newStatistique1'].',Statistique2 = '.$_POST['newStatistique2'].',Statistique3 = '.$_POST['newStatistique3'].',Statistique4 = '.$_POST['newStatistique4'].',Statistique5 = '.$_POST['newStatistique5'].',Impact1 = '.$_POST['newImpact1'].',Impact2 = '.$_POST['newImpact2'].',Impact3 = '.$_POST['newImpact3'].',Impact4 = '.$_POST['newImpact4'].',Impact5 = '.$_POST['newImpact5'].',%1 = '.$_POST['new%1'].',%2 = '.$_POST['new%2'].',%3 = '.$_POST['new%3'].',%4 = '.$_POST['new%4'].',%5 = '.$_POST['new%5'].',Type_calculBis1 = '.$_POST['newType_calculBis1'].',CalculBis1a = '.$_POST['newCalculBis1a'].',CalculBis1b = '.$_POST['newCalculBis1b'].',StatistiqueBis1 = '.$_POST['newStatistiqueBis1'].',Type_calculBis2 = '.$_POST['newType_calculBis2'].',CalculBis2a = '.$_POST['newCalculBis2a'].',CalculBis2b = '.$_POST['newCalculBis2b'].',StatistiqueBis2 = '.$_POST['newStatistiqueBis2'].',ImpactBis = '.$_POST['newImpactBis'].',%Bis = '.$_POST['new%Bis'].'
	*/
	
	
	
	
	
}
	


?>