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
define('DB_NAME', 'plaitil');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7n6_$y /R>(dyGc-=[uJ_x8glCF%ubp7G?d2ZjP3j1CW_1y&;MlyBsr9}Xbbn<.|');
define('SECURE_AUTH_KEY',  'lK,e^7GpVnX2qkj>_Of%%m[1(@_}LY|wV?zHzmY^2{aycy,,3r(}D+<EptNH`*9g');
define('LOGGED_IN_KEY',    'd&oeAA[p/EIM?pIM`Pfop91[iZMWJ0qvpHhnh?x|qp3pc}xXeg2k(%Ks9L^o4]$[');
define('NONCE_KEY',        'aW/84r(Fd`)J4g6xl2Ml<_QRjzrrv;%Y+{NsnOx7WOCO/1)I.{4Lufo] $:0 ^x(');
define('AUTH_SALT',        '?GeWZ ?DF$35Do?OOf1Ap4>gY,GtWi6xnv]D@Tl2_ONaORe6WI{o9!.F;i_PyJ1d');
define('SECURE_AUTH_SALT', 'O0DalzWXigoe;sn!CP^zye48OzW1Re8Kw4t0$J*bf}HLzP^qecP83Y[w1%Q;,5i.');
define('LOGGED_IN_SALT',   '}si6!/uw(p9Kg2Ip(v/n][_@#id<uOk*4riYK$QMW$-Ymc#8X&TTieO|)9g$#kZM');
define('NONCE_SALT',       '%3VC/v,<3:~.,!>WS@(RcvCg.arv6-^xO5T2/oh?HmuX}q{bB88<[7t+[`y$@k$C');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'pil2k16_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
