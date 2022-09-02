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
define( 'DB_NAME', 'wp_ecf_front' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Xsan,iw}c-h]l<V:`Bvym)X?`&_<bc)dOoQIRAKS/MBohpf1(XT7o^CSmv lWa?W' );
define( 'SECURE_AUTH_KEY',  '(z[yV7w{>qB4X`Z?.TA$H#e,$H2Awc:/)oo)-jp3$|PEpeXCkYi#iziw{EO;`XZ8' );
define( 'LOGGED_IN_KEY',    '`f5~>0p^JRP1q{en9 C20:HV1b.x&(f-u xypS&2?%.UWHwK.;)f+p,k#~=mo?1.' );
define( 'NONCE_KEY',        '+NMizpD,(P`AwxW]I_& ?2ZR!imoJt>7O#CqC*q djsV|Ea7k4wcjX1qZ2yVI`QX' );
define( 'AUTH_SALT',        'Ki3btk>9h]9B^]Z/NYA3 Oj)v{#=%8i~^YY:K6AUX:fay4^/j`MAD=3f[]#VQa1+' );
define( 'SECURE_AUTH_SALT', 'b`88dC9<(O1YZHjt7T2o~g-bg5(D4{m.F%o=G5gSiwvd2(J8Ecq+$iSxW;1GbZC{' );
define( 'LOGGED_IN_SALT',   ' azEucmUp]|LI}xcY2XUUP8dpd;?qu:;!tJ fS&TofpOaE4hw8!C$Abf.a^wi.`Z' );
define( 'NONCE_SALT',       'drGC1^6&auKhrvdg@$mF&(lRZHlUBRRhi2C)gl[1t#I-HA5y,ogMwfdF%b6Cf.-v' );
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
