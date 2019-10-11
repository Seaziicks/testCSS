<?php





include("BDD.php");
// $_POST['Description5']='Le test est ok !';


if(!isset($_POST['Description5'])){
	$_POST['Description5']='NULL';
}else{
	$_POST['Description5']='\''.$_POST['Description5'].'\'';
}


$req = $bdd->prepare('UPDATE competence SET Description5 = '.$_POST['Description5'].' WHERE Id_Competence = :id');

	$req->execute(array('id' => 1));




$competences = $bdd->query('SELECT Description5 FROM competence WHERE Id_Competence = 1 ');
$competence =$competences->fetch();







?><script>alert(<?php echo $competence['Description5'];?>);</script>