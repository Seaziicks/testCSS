<?php









if(isset($_POST['Modification_demandee'])){

    //if (isset($id_groupe) && $id_groupe == 0) {


        //Partie caractéristiques
        if(!isset($_POST['neweffectOrder']) || empty($_POST['neweffectOrder'])){$_POST['neweffectOrder']='NULL';}
        if(!isset($_POST['newidCompetence']) || empty($_POST['newidCompetence'])){$_POST['newidCompetence']='NULL';}
        if(!isset($_POST['newactionType']) || empty($_POST['newactionType'])){$_POST['newactionType']='NULL';}
        if(!isset($_POST['neweffectType']) || empty($_POST['neweffectType'])){$_POST['neweffectType']='NULL';}
        if(!isset($_POST['newniveauRequis']) || empty($_POST['newniveauRequis'])){$_POST['newniveauRequis']='NULL';}
        if(!isset($_POST['newtypeCalcul']) || empty($_POST['newtypeCalcul'])){$_POST['newtypeCalcul']='NULL';}
        if(!isset($_POST['newcalcul1A']) || empty($_POST['newcalcul1A'])){$_POST['newcalcul1A']='NULL';}
        if(!isset($_POST['newcalcul1B']) || empty($_POST['newcalcul1B'])){$_POST['newcalcul1B']='NULL';}
        if(!isset($_POST['newcalcul2A']) || empty($_POST['newcalcul2A'])){$_POST['newcalcul2A']='NULL';}
        if(!isset($_POST['newcalcul2B']) || empty($_POST['newcalcul2B'])){$_POST['newcalcul2B']='NULL';}
        if(!isset($_POST['newamplitude']) || empty($_POST['newamplitude'])){$_POST['newamplitude']='NULL';}
        if(!isset($_POST['newnombreAmplitude']) || empty($_POST['newnombreAmplitude'])){$_POST['newnombreAmplitude']='NULL';}

        for($m=1;$m<=2;$m++){
            if(!isset($_POST['newstatistique1']) || empty($_POST['newstatistique1']) || $_POST['newstatistique1']=='NULL'){$_POST['newstatistique1']='NULL';}else{$_POST['newstatistique1']='\''.str_replace("'", "\'",$_POST['newstatistique1']).'\'';}
            if(!isset($_POST['newstatistique2']) || empty($_POST['newstatistique2']) || $_POST['newstatistique2']=='NULL'){$_POST['newstatistique2']='NULL';}else{$_POST['newstatistique2']='\''.str_replace("'", "\'",$_POST['newstatistique2']).'\'';}
        }

        if(!isset($_POST['newimpact']) || empty($_POST['newimpact']) || $_POST['newimpact']=='NULL'){$_POST['newimpact']='NULL';}else{$_POST['newimpact']='\''.str_replace("'", "\'",$_POST['newimpact']).'\'';}

        if(!isset($_POST['newpourcentage'])){$_POST['newpourcentage']='NULL';}else{$_POST['newpourcentage']=1;}


        try{
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            /*$req = $bdd->prepare('UPDATE competenceeffect SET effectOrder = '.$_POST['neweffectOrder'].',idCompetence = '.$_POST['newidCompetence'].',
	actionType = '.$_POST['newactionType'].',effectType = '.$_POST['neweffectType'].',niveauRequis = '.$_POST['newniveauRequis'].',
	typeCalcul = '.$_POST['newtypeCalcul'].',calcul1A = '.$_POST['newcalcul1A'].',calcul1B = '.$_POST['newcalcul1B'].',calcul2A = '.$_POST['newcalcul2A'].',
	calcul2B = '.$_POST['newcalcul2B'].',amplitude = '.$_POST['newamplitude'].',nombreAmplitude = '.$_POST['newnombreAmplitude'].',statistique1 = '.$_POST['newstatistique1'].',
	statistique2 = '.$_POST['newstatistique2'].',impact = '.$_POST['newimpact'].',pourcentage = '.$_POST['newpourcentage'].' WHERE Id_Competence = :id');

            $req->execute(array('id' => $_POST['Id_Competence']));
            */

            $req = $bdd->prepare('
                INSERT INTO competenceeffect (effectOrder, idCompetence, actionType, effectType, niveauRequis, typeCalcul, 
                calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage) 
                VALUES ('.$_POST['neweffectOrder'].', '.$_POST['newidCompetence'].', '.$_POST['newactionType'].', '.$_POST['neweffectType'].', 
                '.$_POST['newniveauRequis'].','.$_POST['newtypeCalcul'].', '.$_POST['newcalcul1A'].', '.$_POST['newcalcul1B'].', '.$_POST['newcalcul2A'].', 
                '.$_POST['newcalcul2B'].', '.$_POST['newamplitude'].', '.$_POST['newnombreAmplitude'].', '.$_POST['newstatistique1'].',
                '.$_POST['newstatistique2'].', '.$_POST['newimpact'].', '.$_POST['newpourcentage'].')');

            $req->execute();
            echo "\nPDO::errorCode(): ", $req->errorCode() . "<br />";
            echo "\nPDO::errorInfo():\n";
            print_r($req->errorInfo());
        }catch(Exception $e){

            die('Erreur : '.$e->getMessage());
        }

    //}
}



?>