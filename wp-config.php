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
define('DB_NAME', 'fundagrollano2');

/** MySQL database username */
define('DB_USER', 'kevin_romero');

/** MySQL database password */
define('DB_PASSWORD', 'koiti2016');

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
define('AUTH_KEY', 'j@c-S$?=-XH=!KAIRn)/Z<z$EAuWs]}Fyr]I-B/BfpvaWK*/SAQ!|XR*<-}SX{%Zh$oW]pwaPaWaCx(XJd&$VPbrKKFiEjK{>X=[lVusKCxhUKlVJm*{LfBV]<gTu!Eb');
define('SECURE_AUTH_KEY', '>UeHwkPTDarR=rL(l%{jXt>wna&G)wW_;{C&d}l[n{$<HTuN@LE<QKobviy|T@w=e+w$YFM?AU(B}eYv/[VOcC)iKjRjxdw?sX$+EXPds={ZKwQTN@BH?]QF+*@bNgoN');
define('LOGGED_IN_KEY', 'oQ)xgJK]}W!L%=sUJizlQc+Wp;{C&)hq%YMnaFpE?lVn>*wUj{lS^ZR<HMm@t_A_I/=VDFczr[mnoceX{)UgoqD[AB@Iw/se$dneIKLDWG;X/ZlaU*DeAgG{I_t!_DFy');
define('NONCE_KEY', 'vqnkA@_$d/l_xlSDX$y*{^*>u{<]^bEYo=-Q^v{R+TiJ|+LKWg=zmdM;ZiPTsfZXIuWDn_$yabg;f/CLM$LUhgC)r-%(+u=ZtQi+wmF<-bVeS;c(L{OCET^le+es;xXv');
define('AUTH_SALT', '$AFmU$/UwUDan[gOZ@IEFB[|kbQifAUtT)iGOjGpJ|tzu|pBNr{|Aa!ympFJ(nL%y^Ec|I[NyeEdB&[?o;yv%_q+C)Tb(YzIiVkoattJ=@/@%fw*Fl^&{jSi}<&fM%Ex');
define('SECURE_AUTH_SALT', 'Af>ugThw/z/TH?/WZK|A<yedeXTC}y*w}MJ&I!@aiwKB+-[@K-I|cm*_rsQlY+IO!A}/IZVZ%uo<^}{JZrPZ{XKZiKBaDnAYRytWTn-kH%Pb;t**lT*rb?toW@pa[mU?');
define('LOGGED_IN_SALT', '-^cg_LbHF%Q&VkPXMrOvfi<uuDU@}mNDIuLS/||W}wipFm%-[}=i}fI^|P}dUTVt[@VSb<jflXloDBUSEEc_C(|D?YfqY/ElIg*@!-&fK!Gx/Xva/oF?!Donm{;SX_Mi');
define('NONCE_SALT', '<Y*Jb]!Dftj%tdIE-ZJ]Gvy*x-PR/IWHCTzamWcXx&@m(@NEZ&>XV]cJKb/?G<lo{TRkZhmGC;JKOn!SR<}usa^wXK/TGqXI*-^_ZyyXI(yqId?/@h*HD]|}BgjDc+DA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_iudb_';

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
