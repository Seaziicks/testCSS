<?php







include('BDD.php');
$personnage='Démoniste';




?>
<html>

<head>
	<link rel="stylesheet" href="invocation.css" type="text/css" media="screen"/>
<style>

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="invocation.js"></script>


</head>





<body>
<div class="invo" id="Invocation">
	<div class="blocOpaque">
	</div>
	<div class="resistant">
		<img class="imginvo" src="../Demoniste/Icones/Diablotin.jpg">
		<div class="nominvo">Diablotin</div>
		<div class="textinvo"><br>Invoque un diablotin à ses côtés, qui a peu de points de vie, mais est très mobile. Il est autonome et n’attaque pas les alliés.
		<br>Le Diablotin a <span class="voir"><span class="vie"></span></span>
		</div>
		
		
		<table class="statsinvo">
			<tr>
				<td> Points de vie : </td> <td> 8 </td>
			</tr>
			
			<tr>
				<td> PA : </td> <td> 1 </td>
			</tr>
			
			<tr>
				<td> Dégâts par coup : </td> <td> 4 </td>
			</tr>
			
			<tr>
				<td> PM : </td> <td> 4 </td>
			</tr>
			
			<tr>
				<td> Armure : </td> <td> 0 </td>
			</tr>
			
		</table>
	
	</div>
</div>

<div class="test"> ok </div>

<span onclick="invocation('Diablotin')"> Diablotin </span>





</body>