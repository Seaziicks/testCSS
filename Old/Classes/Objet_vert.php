<?php 

$equipement=$bdd->query('SELECT * 
						FROM equipements AS e, personnage AS p 
						WHERE e.Id_Personnage = p.Id_personnage
						AND p.Libellé = \'' . $personnage . '\' 
						');
$Equipement1='Coiffe';
$Equipement2='Epaules';
$Equipement3='Gants';
$Equipement4='Torse';
$Equipement5='Brassard';
$Equipement6='Ceinture';
$Equipement7='Jambieres';
$Equipement8='Bottes';
$Equipement9='Amulette';
$Equipement10='Anneau1';
$Equipement11='Anneau2';
$Equipement12='Arme';
$Equipement13='Offhand';


$personnage='Voleur';
$objet=$bdd->query('SELECT ov.* 
						FROM equipements AS e, personnage AS p,Objet_Vert AS ov 
						WHERE e.Id_Personnage = p.Id_Personnage
						AND p.Libellé = \'' . $personnage . '\'
						AND ov.Id_Objet = e.'.$Equipement1.'
						OR ov.Id_Objet = e.'.$Equipement2.'
						OR ov.Id_Objet = e.'.$Equipement3.'
						OR ov.Id_Objet = e.'.$Equipement4.'
						OR ov.Id_Objet = e.'.$Equipement5.'
						OR ov.Id_Objet = e.'.$Equipement6.'
						OR ov.Id_Objet = e.'.$Equipement7.'
						OR ov.Id_Objet = e.'.$Equipement8.'
						OR ov.Id_Objet = e.'.$Equipement9.'
						OR ov.Id_Objet = e.'.$Equipement10.'
						OR ov.Id_Objet = e.'.$Equipement11.'
						OR ov.Id_Objet = e.'.$Equipement12.'
						OR ov.Id_Objet = e.'.$Equipement13.'
						
						');
$statistique=$objet->fetchAll();

echo statistique[1]['Nom'];

for(i=0;i<=13;i++){
	
	
	
}







?>






















































<li class="d3-item item-slot-id-head
                    rarity-6"> <!-- todo: two-handed weapon tag -->
                    <a class="item-slot-container">
                        <div class="tooltip-hover" data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508" data-item-id="5847"></div>
                        <span class="item-container"><span class="item-effect"></span></span>
                        <span class="image"><img src="https://media-diablofans.cursecdn.com/avatars/283/346/p6_helm_norm_set_17_NM_icon.png"></span>
                        <div class="touch-tip">

<div class="diablo-fans-tooltip item-tooltip">
    <div class="db-tooltip">
        <ul class="db-summary">
            <li class="db-title rarity-6 db-header">
                <span>Rathma's Skull Helm</span>
            </li>
        </ul>
        <div class="db-image rarity-6">
            <img src="https://media-diablofans.cursecdn.com/avatars/283/346/p6_helm_norm_set_17_NM_icon.png">
        </div>
        <div class="db-description">
            <small class="rarity-6">Set Helm</small>
            <ul class="db-summary">
                <li class="primary-stat">
                
                    <span>21 - 24</span> <small>Armor</small>
                
                </li>
                
                    <li class="primary-stat">Primary Stats</li>
                    
                <li class="grouped-stats">
                    <ul>
                       <li class="stat ">
                                    <span class="value">+626 - 750</span> Strength
                                 </li><li class="stat ">
                                    <span class="value">+626 - 750</span> Dexterity
                                 </li><li class="stat ">
                                    <span class="value">+626 - 750</span> Intelligence
                                 </li><li class="stat ">
                                    Sockets (<span class="value">1</span>)
                                 </li>
                    </ul>
                </li>
                
                <li class="grouped-stats">
                    <ul>
                       <li class="set">
                                    Bones of Rathma
                                 </li><li class="set set-item item-name">
                                    Rathma's Skull Helm
                                 </li><li class="set set-item">
                                    Rathma's Spikes
                                 </li><li class="set set-item">
                                    Rathma's Ribcage Plate
                                 </li><li class="set set-item">
                                    Rathma's Skeletal Legplates
                                 </li><li class="set set-item">
                                    Rathma's Ossified Sabatons
                                 </li><li class="set set-item">
                                    Rathma's Macabre Vambraces
                                 </li><li class="set">
                                    (<span class="set-num">2</span>) Set: <span class="value">Your minions have a chance to reduce the cooldown of Army of the Dead by 1 second each time they deal damage.</span>
                                 </li><li class="set">
                                    (<span class="set-num">4</span>) Set: <span class="value">You gain 1% damage reduction for 15 seconds each time one of your minions deal damage. Max 50 stacks.</span>
                                 </li><li class="set">
                                    (<span class="set-num">6</span>) Set: <span class="value">Each active Skeletal Mage increases the damage of your minions and Army of the Dead by 250%.</span>
                                 </li>
                    </ul>
                </li>
                
                    <li>+ 4 Random Magic Properties</li>
                
            </ul>
        </div>
    </div>
</div></div>
                    </a>
                </li>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				