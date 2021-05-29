<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>

    <!-- ===================    CSS    =================== -->
    <?php include('./css/BootstrapCSSImport.php') ?>
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>
</head>
<body>
<?php include('navbar.php');?>

<div class="auto-completion">
    <label for="search" style="text-align: center">Recherche avec auto-complétion</label>
    <input id="search" type="text" autocomplete="off" autofocus/>
    <input id="caseSensitive" type="checkbox" data-toggle="popover" title="Case Sensitive"/>
    <div id="results"></div>
</div>

</body>
</html>
<?php include("./css/BootstrapJSImport.php") ?>
<script type="text/javascript" src="js/search_test.js"></script>
