<!-- Sidebar  -->
<nav id="characterInfos">
    <div class="sidebar-header">
        <h3><?= $personnage->_Libellé ?></h3>
    </div>

    <ul class="list-unstyled components">
        <p>Information</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Arbres</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <?php
                foreach ($arbre->_specialitesLibelles as $specialiteName) { ?>
                    <li>
                        <a href="#"><?= $specialiteName[0]; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    </ul>
    <ul class="list-unstyled CTAs characterStatistique">
        <li>
            <table>
                <tbody>
                <tr>
                    <td>
                        Niveau
                    </td>
                    <td>
                        <b><?= $personnage->_Niveau ?> </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Vie
                    </td>
                    <td>
                        <b><?= $personnage->_PDV_Actuel ?> </b> / <b><?= ($personnage->getTotalVitalité()) * 2 ?> </b>
                    </td>
                </tr>

                <tr>
                    <td><span class="force">Force</span></td>
                    <td><span class="force"><?= $personnage->_Force ?> </span>+ <span
                                class="force"><?= $personnage->_Bonus_Force ?></span> (<span
                                class="force"><?= $personnage->getTotalForce() ?></span>)
                    </td>
                </tr>
                <tr>
                    <td><span class="vie">Vitalité</span></td>
                    <td><span class="vie"><?= $personnage->_Vitalité ?> </span>+ <span
                                class="vie"><?= $personnage->_Bonus_Vitalité ?></span> (<span
                                class="vie"><?= $personnage->getTotalVitalité() ?></span>)
                    </td>
                </tr>

                <tr>
                    <td><span class="intelligence"> Intelligence </span></td>
                    <td><span class="intelligence"><?= $personnage->_Intelligence; ?> </span>+ <span
                                class="intelligence"><?= $personnage->_Bonus_Intelligence ?></span> (<span
                                class="intelligence"><?= $personnage->getTotalIntelligence(); ?></span>)
                    </td>
                    <td>
                        <span class="<?= $personnage->_Type_Ressource; ?>"><?= $personnage->_Type_Ressource; ?> </span>
                    </td>
                    <td><?php if (!empty($personnage->_Type_Ressource)) { ?><span
                            class="<?= $personnage->_Type_Ressource; ?>"> <?= $personnage->_Ressource ?> </span>+
                            <span
                                    class="<?= $personnage->_Type_Ressource; ?>"><?= $personnage->_Bonus_Ressource ?></span> (
                            <span class="<?= $personnage->_Type_Ressource; ?>"><?= $personnage->getTotalRessource() ?></span>)<?php } ?>
                    </td>
                </tr>

                <tr>
                    <td><span class="agilité"> Agilité </span></td>
                    <td><span class="agilité"> <?= $personnage->_Agilité ?></span> + <span
                                class="agilité"><?= $personnage->_Bonus_Agilité ?></span> (<span
                                class="agilité"><?= $personnage->getTotalAgilité() ?></span>)
                    </td>
                </tr>
                <tr>
                    <td><span class="réussite">Réussite </span></td>
                    <td><span class="réussite"><?= ($personnage->_Réussite + $personnage->_Bonus_Réussite) ?></span>
                        (<span class="réussite"><?= $personnage->_Réussite ?> </span> + <span
                                class="réussite"><?= $personnage->_Bonus_Réussite ?></span>)
                    </td>
                </tr>
                </tbody>
            </table>
        </li>
    </ul>

</nav>