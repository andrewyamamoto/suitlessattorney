<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'suitlessattorney');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '|N@9%D828`&b[X0lVa EU=V0l#(.95~!E XVnO{BRl)?f#6Vzb =&shx[X-:Ynn`');
define('SECURE_AUTH_KEY',  '[m)x=^$m4}UrX+4ycbq|Z>8.n`[8TxB|1q*Ddl+Mp(ubxL>K3oYKcu,+m2>;M,pz');
define('LOGGED_IN_KEY',    'h`W3EauMa%?IiDW)x.G?=pIGyBbaXeURFd3J*WvvTPv>R5]MW2s+;=v=]]f-|&B[');
define('NONCE_KEY',        '@oOPM,*OJmPIV@++Ow)griRY5ZL$hYi q{zMSi?6DCXU}u0jY8aX!W4vfjI1|bc(');
define('AUTH_SALT',        'w|t~ug7n9=.LVc$ISe0|Gx/-3</rv/yJ%i+Kb-o]}}B_k,-LDM(q3~P_X!+#4[eY');
define('SECURE_AUTH_SALT', 'w-Y;e|B(2Q2H9[:H+^~9Q=D,&fTO!`x tigGd)/| QpP+/mhL)=+ LWrg `k^T )');
define('LOGGED_IN_SALT',   '[zlu!tCm|2T_Ax#li?kWW Z`h|-7WL,G;?TN!j/]W|9cIJF_XjW]<i|bH$K{9&$Y');
define('NONCE_SALT',       'v1*:,g6S_#SUI[/ZD#35!JPF3jHsTk2~RXcE]hOG}+e3`v,S@;A!H}l3YmIp*dGv');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
