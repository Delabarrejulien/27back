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
define( 'DB_USER', 'julwordpress1' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'tqTW8H8S7Kw5cHSV' );

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
define( 'AUTH_KEY',         'jdxdnd9k&ip3p!=U!G{k{xpeS]jIra.N:s{`g:|=~^OaC4adf%< ~aES;[n+z3_{' );
define( 'SECURE_AUTH_KEY',  'z7nOr)YmT{MK(>Db>;4]-$]JnjgdVe/b=ZKwK%LwkK2Lcctg&z%Rac|c2`r^6W:.' );
define( 'LOGGED_IN_KEY',    'xuti.?o+5iqM8wI=Fd:GshcTfe+<#%qiy~.,8%lJ![Tdi1.!XgxXBDGW-I=$^)2Z' );
define( 'NONCE_KEY',        '%_4VSnZ0.K|QIyr9E3ps}DsIOmz&FtlpBOU8se=@}1)I;b|4k5EGkKNg2:cfc;H;' );
define( 'AUTH_SALT',        'zgCRP=$f1z!/^uIqt.f:R{VO:x?z?XNVJ$~YeRh.J&SaNf(og6CDv-})[>R?iytF' );
define( 'SECURE_AUTH_SALT', 'uLK60kld{-M9*J+{%|EF`>Z|A=y HgH0@C`~ic^H$,cVO#;t7J^,dHjHdRK)(g0@' );
define( 'LOGGED_IN_SALT',   '_(^e|jl!p@!TzyvP*fC52?~w@J?6VL>FjMH{zv7J^Iv_i`l/ g})&UDfPTz.uXcv' );
define( 'NONCE_SALT',       '@cd}uyR8j]T8+f_LVUIIK,nK8~2Zc(qTH:fC$m.xdCYVo([qdO#EdA:M}xS*8Snb' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'azerty_';

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
