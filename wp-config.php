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
define( 'DB_NAME', 'res03_php_j16' );

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
define( 'AUTH_KEY',         '1}%Z~46n[QIqQJel/ZpwBb$~&:_3UsUt@@$H)3V2/4<)F(q)lLcye6,ymbul7n+N' );
define( 'SECURE_AUTH_KEY',  'C4B%f-sEk4n1qc)O.  hy<esK`#{BzNG]r*MsmV_(u$ Nj+Jokf/s$Ed-<_xfVbb' );
define( 'LOGGED_IN_KEY',    'yz.,t]]xG(!{(<d;J?[qp<*|Z*%@^HdH:8vcHOm;Nv@wmcXy_D_Brue@cHCVw%E4' );
define( 'NONCE_KEY',        '`s>58Z_v<#=6me7,Mb#G/#[r%]?f5[I!Wb* >Ka~5J,&A];2ARh-&byF6>kE)x<)' );
define( 'AUTH_SALT',        '<7A8ZHia(Gm2d?AyVPLK`h1{q{c+AE ecnMpvoy*,4vQZ9t-KPg;a6!a;K8GC}=v' );
define( 'SECURE_AUTH_SALT', '6*k{SRZ.cV$3DF8HD[.{gV;_W !eKFSx=*b4XaRbk7-$Yp]c;jj&mPePX6dnaAGf' );
define( 'LOGGED_IN_SALT',   'Wg{5Ke{*JVCDsSMlJC^jBl8CTpGK=3ud?J9RMEj6}+JE<$CRARtC4m*EBGy9fIR5' );
define( 'NONCE_SALT',       '4hjN//FG?Fd<`5i~vs,i|uP~Ug_*8bf+XYBgbWf}8r;A_yoUv:Gk@H6E!DYmQ4(-' );
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
