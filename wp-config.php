<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ruthie_luhnow');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'LY}DIaoa%pPDXjI>}!S_)bc?XPRu!iOH)EDiytfYoEuu^W?nnaMwDsV)F<)GQcxiUSlaIvW/k)>fBp_/]&&O*u;rsnbWA@BPB+AsdcF?-PU&zmm?vj%AbHZqzw}qhmu_');
define('SECURE_AUTH_KEY', '@hq@sIWdOMSg>{+MmFgQK!_KZ>?@&&m>mIWo$$Z<[OqGa(evJo|YgspR+?Vw&mp*E&&n<QoIppkMHl%L@&i>h;&}MJI{RtpmboSSLcMhJmp|mG@@AHGehwdPZdTP!XfQ');
define('LOGGED_IN_KEY', 'X)Srx<K&z+bQno&Ov?CF$tiL!kX!IM{n]XKXdG&p)Mz&%}DrVM>Rmv!$[KwL/XF%FR[ZGUILUXqnD[XUP}FZ>GybvWcBA&VX_GV}nH)UZA?sJqGo^>QxOs-be|[GiJ^G');
define('NONCE_KEY', '*LGDA+[gEPU+^<$}Zv*EmyfVkDiKdBvb]|%HS;)}cgEa(LerbX/si>Mp@$KbIU^@+bQfJ^)UAlt-*u<CSI/M$LQc/M)r>WG(I%oL$/)vyJMg]q+V)?]mIlwNK<f_NCsY');
define('AUTH_SALT', 'le@JO|gOri_-+aKvmmA?kpDLt}X^[^$BbdLw|QZ&BHSMN$G)ks^E(MF%$t^<zpYGRI_BuAXBNWK[MY=PDSc*mk?(KyRa[FURBYz&l)_]nP]GmbhATNUh(&Ehnhx@NLG%');
define('SECURE_AUTH_SALT', 'b&|MDu+Hvz!sVwjy-Wp&Hf/(UF[+Q*FMs|*ngxu[cd(Z|($yKi(sl*ohvf+_MS^G[tum((xXF&C{KN-oj(O*?KWi!}JhPWbnT?uI|_q;Dt+mZObpQgXru@^zj]&I-f{s');
define('LOGGED_IN_SALT', '<jx%j^Am|aOYPBKcTCT&VM|K$<=$p)i?dW(;Cfiey+sNdwD=KrNHwZ^SctG{ykWdhFcdksFZMPA<<>wox+d>&C@dC(GUpNh+M{Zkicui_kf{yTF)>qF-uSJt>U=>FD^f');
define('NONCE_SALT', 'SDYu&-Gh!&;]sHspQXO*fsC>=iR>%I(^-_$%KylGbI(ED)Pn+z?[pu<aLfLlmGkWqjk[ZUg%$ta+^neUe}mX[Nf&nb]/DO*ESwP/fuQp*PG*T^)ue?t}_/x(uhvgIxKE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yhvp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
