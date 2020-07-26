<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <meta charset="utf-8"/>
    <title>TP : Un système d'auto-complétion</title>
</head>
<body>
<?php include('menu.php');?>

<div class="auto-completion">
    <label for="search" style="text-align: center">Recherche avec auto-complétion</label>
    <input id="search" type="text" autocomplete="off" autofocus/>
    <input id="caseSensitive" type="checkbox" data-toggle="popover" title="Case Sensitive"/>
    <div id="results"></div>
</div>

</body>
</html>

<script type="text/javascript" src="js/search_test.js"></script>
