<?php
// On enregistre notre autoload.
/**
 * @param $classname
 */
function chargerClasse($classname)
{
    if (is_file('../../../Poo/'.$classname.'.php'))
        require '../../../Poo/'.$classname.'.php';
    elseif (is_file('../../../Poo/Manager/'.$classname.'.php'))
        require '../../../Poo/Manager/'.$classname.'.php';
    elseif (is_file('../../../Poo/Classes/'.$classname.'.php'))
        require '../../../Poo/Classes/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');