<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordPress-studi' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>&Q0Q5oSi+CyS`!1oRA:y)2jNG/>xWK!Dz[c;nnCxkp8HgWef}?RDsda-a-V#?ew' );
define( 'SECURE_AUTH_KEY',  '!2aapC[f:7MJ/1{CkaQ]MCY>APjCE0O~H>oHN*5DCj`V{>vuB5QaKkoAj,azOaum' );
define( 'LOGGED_IN_KEY',    '8#6U@Vi%.=C6M5_aMtwOY$i>`mx$98_l?3cJX9]Gi^w(J[}<.G<`uC8)}29pB<V3' );
define( 'NONCE_KEY',        'iq&(B6Y. |bT!2.gIA$b6)2NC]W*(D?Mc[PA@y{}UIrWEB>x2G#gU)k&c&CA%2Nr' );
define( 'AUTH_SALT',        '=/^=2@9/8NZh!q;qt.hsA9nN630:VF6!iV0@Q57gLP69@cEGdb(07`krX+A{{SR]' );
define( 'SECURE_AUTH_SALT', 'zeh%ra%1HUAA6tUh*qFalU]>`Ec:k(.doqOv3_@uYoZ tKcM#Ns]+NEo^gj2pga9' );
define( 'LOGGED_IN_SALT',   '|JQ:L,)Beg=IrCu ^MpI3iW+3EAlttYRu<5,|pjr) nS#ln3f9BIhPsCpKP;u~&g' );
define( 'NONCE_SALT',       '7P[I0}9[=rZI8US7tUsTL-FJ^HACJW}kmMX4M@D>YFOrL~~1@}C}}2?KuG&V.k.z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
