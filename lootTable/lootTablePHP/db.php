<?php

// Sous WAMP (Windows)

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=u418341279_lootTable;charset=utf8', 'u418341279_lootTable', 'Banane00002!');
}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}