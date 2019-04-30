<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'anditrip_slice');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'anditrip_slice');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '+18andi18+');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.c[6)V-:vJ^yO]ek%L[}EC/rxb&$mz`_$ICJ,;8>} W`V[SeJ:Q9(g7sdsq(p[vN');
define('SECURE_AUTH_KEY', 't}8b[o$S4PW!uHe4KKCWu#ewPf,9bh0Aij 1Z}{cF[@)WnfN|w2=+P$;&+</KT5x');
define('LOGGED_IN_KEY', '1^b3iGhQ<FuvrtubuRDb$.DVb9;{Ou`U6M&_sc-,OO0YgR1ju8~ZYABhzT](inQ?');
define('NONCE_KEY', 'PAfAH[RE,1~Fgcc#cC`,%,bqQQzHL-;GKLHan=`j26_m;S^kS3bEgF{snVR+[)s@');
define('AUTH_SALT', 'zsBW5N]<fKer`#o.gK<GP~_*4)W?1 HjrhEQbg 7ME>Uv%KryX=8Qp@Lsw+o^fUv');
define('SECURE_AUTH_SALT', 'TV.vg!Uf(HB#?zapUg$3R!Cq)QwY@-<DU;[:k600H?3Pk{~!Z/@PV6A/g[ia]]=6');
define('LOGGED_IN_SALT', 'It8U}zVvC_YKH(^yJLjrGMNC!{6Bg_x&wIztUb^ GWsfM5 !570g(TJP[tMd$oI>');
define('NONCE_SALT', '.gM;#e3!%-5Y<kt;GA9rybkW8<mWeZ-#H^uOEP_iRnJWV^P#&6C[uz`ZjW4:uODn');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');


