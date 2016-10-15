<?php
/**
 * Projet SIN - Stockage des données numériques
 * Framework utilisé : jquery.js (assets/js/jquery.css)
 * Le code est remplie de commentaire pour la partie PHP.
 * @author Quentin Aslan <quentin.aslan@outlook.com>
 * @author Pierre Sanson <pierre.sanson@outlook.com>
 * @author Numa Balard
 * @author Quentin Mariucci
 * @since 15/10/2016 
 */

/**
 *
 *	TODO:
 *	- Quentin A (CP)
 * 		- PHP & Arborescence / JQUERY (?)
 *	- Pierre 
 *		- HTML / CSS
 *	- Numa 
 *		- HTML / CSS
 *	- Quentin M 
 *		- HTML / CSS / JQUERY (?)
 */


/**
 * Si la variable $_GET['p'] existe alors ... sinon ...
 */

if(isset($_GET['p'])) {

	$p = $_GET['p'];

} else {

	$p = ' ';

}

/**
 * Si la variable $p = home, page 1, page 2 ...
 * alors mettre le contenue de ces pages dans la variable $content
 * (Simple template PHP)
 * Documentation de la fonction ob_start() => http://php.net/manual/fr/function.ob-start.php
 */

ob_start();

switch ($p) {

	case 'home':
		require_once('views/home.php');
		break;
	
	default:
		require_once('views/home.php');
		break;
}

$content = ob_get_clean();

/**
 * Structure de la page html de base afficher, elle affichera la variable $content dans <body>
 * Code source => views/default.php
 */
require_once('views/default.php');

?>