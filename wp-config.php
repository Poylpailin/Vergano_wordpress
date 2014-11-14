<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'vergano_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S~v!_@)q,B8oX/=`K*}wZxNQ*Ni-Phz5>kmX580F+-3oTnh9,ap Iz$ qFyi?W%b');
define('SECURE_AUTH_KEY',  'TzN|4JR{-r{DKGsNTLRbfHH!K680,#>UK5bablKmZbo8r;!Mw7.<7;xwP|/1e8F^');
define('LOGGED_IN_KEY',    '|0C0w-{Zql]_*QA;[2=gBhI^F=5~#@+<HHdKF]imozX#IX.T%*oy#WLtijLc-I%f');
define('NONCE_KEY',        '+y*/@|k(#6S+lJ1.32(tk9PhYW-qNb(:`:+1>pd^a^Zq+3fhV{yoqg{tR#-dwdY*');
define('AUTH_SALT',        ',~S~lZ.{i|F~xBrT;{+o:}aQL|-Ll%`4V14CyEPAg{qoG;)C!=4H-Z)JeFTx%oFX');
define('SECURE_AUTH_SALT', 'L|BZ41K JU`_Xnn6p%;!H):f-3Zk,b++[}mT6cv4R=a|}r(5bb/-nms}e||_i`?C');
define('LOGGED_IN_SALT',   'g+T04+Jsh{@4^)-=s-7-fc(:VpJ#Pe,.BGA%)1hJH-U/!;QYz-dIz8B^90aXPw`~');
define('NONCE_SALT',       '|DXur&w&4&mzQ57:IQOi8M>8z!giE=}}hgWGe~Xfb?|1T<Y@!-sdOeDUDMVom:y-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');