<?php


session_start();
include("BDD.php");
if (isset($_SESSION['pseudo'])) {
    $recherche = $bdd->query('SELECT * FROM membres WHERE pseudo=\'' . $_SESSION['pseudo'] . '\'')
    or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

    $data = $recherche->fetch(); //On les mets sous forme string

    $id_groupe = $data['id_groupe']; //On prend l'id qui vient d'être attribué

    if (isset($id_groupe) && $id_groupe == 0) {


        if (empty($_POST['Statistique_Principale']))
            $_POST['Statistique_Principale'] = 'NULL';
        else
            $_POST['Statistique_Principale'] = '\'' . $_POST['Statistique_Principale'] . '\'';

        if (empty($_POST['PropriétéMagique1']))
            $_POST['PropriétéMagique1'] = 'NULL';
        else
            $_POST['PropriétéMagique1'] = '\'' . $_POST['PropriétéMagique1'] . '\'';


        if (empty($_POST['PropriétéMagique2']))
            $_POST['PropriétéMagique2'] = 'NULL';
        else
            $_POST['PropriétéMagique2'] = '\'' . $_POST['PropriétéMagique2'] . '\'';


        if (empty($_POST['PropriétéMagique3']))
            $_POST['PropriétéMagique3'] = 'NULL';
        else
            $_POST['PropriétéMagique3'] = '\'' . $_POST['PropriétéMagique3'] . '\'';


        if (empty($_POST['PropriétéMagique4']))
            $_POST['PropriétéMagique4'] = 'NULL';
        else
            $_POST['PropriétéMagique4'] = '\'' . $_POST['PropriétéMagique4'] . '\'';


        if (empty($_POST['Val']))
            $_POST['Val'] = 'NULL';


        if (empty($_POST['Val2']))
            $_POST['Val2'] = 'NULL';
        echo '<br/><br/>Test de Val2 :<br/>';
        echo '<br/>is_null() : ' . is_null($_POST['Val2']);
        echo '<br/>isset() : ' . isset($_POST['Val2']);
        echo '<br/>empty() : ' . empty($_POST['Val2']);
        echo '<br/><br/>Fin de test de Val2<br/><br/>';

        if (empty($_POST['Valeur1']))
            $_POST['Valeur1'] = 'NULL';


        if (empty($_POST['Valeur2']))
            $_POST['Valeur2'] = 'NULL';


        if (empty($_POST['Valeur3']))
            $_POST['Valeur3'] = 'NULL';


        if (empty($_POST['Valeur4']))
            $_POST['Valeur4'] = 'NULL';

        echo $_POST['Statistique_Principale'] . ' ';
        echo $_POST['PropriétéMagique1'] . ' ';
        echo $_POST['PropriétéMagique2'] . ' ';
        echo $_POST['PropriétéMagique3'] . ' ';
        echo $_POST['PropriétéMagique4'] . ' ';
        echo $_POST['Val'] . ' ';
        echo $_POST['Val2'] . ' ';
        echo $_POST['Valeur1'] . ' ';
        echo $_POST['Valeur2'] . ' ';
        echo $_POST['Valeur3'] . ' ';
        echo $_POST['Valeur4'] . ' ';
        echo '<br><br><br><br><br><br><br>';

        echo 'INSERT INTO equipement(Statistique_principale, Val, Val2, PropriétéMagique1, PropriétéMagique2, PropriétéMagique3, 
                       PropriétéMagique4, Valeur1, Valeur2, Valeur3, Valeur4, Nom, Image, Couleur, Rareté, Type, Niveau, Emplacement, Validé) 
					VALUES(
						' . $_POST['Statistique_Principale'] . ',
						' . $_POST['Val'] . ',
						' . $_POST['Val2'] . ',
						' . $_POST['PropriétéMagique1'] . ',
						' . $_POST['PropriétéMagique2'] . ',
						' . $_POST['PropriétéMagique3'] . ',
						' . $_POST['PropriétéMagique4'] . ',
						' . $_POST['Valeur1'] . ',
						' . $_POST['Valeur2'] . ',
						' . $_POST['Valeur3'] . ',
						' . $_POST['Valeur4'] . ',
						\'' . $_POST['Nom'] . '\',
						\'' . $_POST['Image'] . '\',
						\'' . $_POST['Couleur'] . '\',
						' . $_POST['Rareté'] . ',
						\'' . $_POST['Type'] . '\',
						' . $_POST['Niveau'] . ',
						\'' . $_POST['Emplacement'] . '\',
						false /*Validé field*/
					)
					';

        echo '<br><br><br><br><br><br><br>';

        $sql = $bdd->query('INSERT INTO equipement(Statistique_principale, Val, Val2, PropriétéMagique1, PropriétéMagique2, PropriétéMagique3, 
                       PropriétéMagique4, Valeur1, Valeur2, Valeur3, Valeur4, Nom, Image, Couleur, Rareté, Type, Niveau, Emplacement, Validé) 
					VALUES(
						' . $_POST['Statistique_Principale'] . ',
						' . $_POST['Val'] . ',
						' . $_POST['Val2'] . ',
						' . $_POST['PropriétéMagique1'] . ',
						' . $_POST['PropriétéMagique2'] . ',
						' . $_POST['PropriétéMagique3'] . ',
						' . $_POST['PropriétéMagique4'] . ',
						' . $_POST['Valeur1'] . ',
						' . $_POST['Valeur2'] . ',
						' . $_POST['Valeur3'] . ',
						' . $_POST['Valeur4'] . ',
						\'' . $_POST['Nom'] . '\',
						\'' . $_POST['Image'] . '\',
						\'' . $_POST['Couleur'] . '\',
						' . $_POST['Rareté'] . ',
						\'' . $_POST['Type'] . '\',
						' . $_POST['Niveau'] . ',
						\'' . $_POST['Emplacement'] . '\',
						false /*Validé field*/
					)
					') or die(print_r($bdd->errorInfo()));

        echo 'Objet enregistré !';
    }
    $recherche->closeCursor();
}
echo '<SCRIPT>window.close()</SCRIPT>';
