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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ',U2arNG[nVW=8Q63P+!PGZLG*roZh+KUOUoI:8*.+s2DB-iqFc7NPS-HFG3)~cNN' );
define( 'SECURE_AUTH_KEY',  'P3N|X$J&qnxw||N+l~l-^eDyL7u*4?q;QWsh;6pORu9(OU#l&.*_V%kX9+&gW`y:' );
define( 'LOGGED_IN_KEY',    '7hhS95PX~Vp[WZZ`WeNK(CH#D~iRZdRJHD_G-k[i GShC6.3L>sr+E]tF{=8qkYY' );
define( 'NONCE_KEY',        '!zGk=`uo~+TSIT-<id?T}sEP8ghbdj!2satlPi.H2Sq%[,eOI}-)<p6mw$tz9#TL' );
define( 'AUTH_SALT',        '6(8`|nq5`.A5|;|^w53gSbJ-[9W`xL%oR|fA~}VEO#;);kRkb;w{)vZVw`<(oGBB' );
define( 'SECURE_AUTH_SALT', 'H*rLIYN,m9U4piW^*kHU BzVC;!ZokY#V|MQAg,4~k#<a$2q}VOH$!SZGX.,WI&:' );
define( 'LOGGED_IN_SALT',   '&!m#~l/?L;y%K2`Qo0^VRanBE~ZC3-NRjQ{ks9]6v#mw,_J+UG@q31k.&*MEA21q' );
define( 'NONCE_SALT',       'Y7Sze.@-Gl(CxAG=D.hwHV;gdjdoLVaRfp Vz:G;y:,(t2(qfcr+jgvhMUra_R2w' );
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
