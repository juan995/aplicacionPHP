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

define('DB_NAME', 'wordpress');


/** Tu nombre de usuario de MySQL */

define('DB_USER', 'wordpress');


/** Tu contraseña de MySQL */

define('DB_PASSWORD', 'wordpress');


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

define('AUTH_KEY', 'XoSd0]_dFH<2,[yAK$ch%D,^qu3lH+y/$z7]4g-XO ]:pDN[8b1~,|yi,H{rW5M-');

define('SECURE_AUTH_KEY', 'I/|wd*NiKxb|-Eymv2-e+r5mnNH6+ccRg/(IJ.8%z-h ,0[=IJFfTlvv2+M+Sr*~');

define('LOGGED_IN_KEY', 'm*2+Kf.AWXotKoA]-%X^KYuD*w[.|m6>~F;f*P?SvW9)bP;DR[R! Yw!pyU1b6lS');

define('NONCE_KEY', 'w.9BFW/dLjXEg|zDo0}u~%6FZo~5Z?HckwB:+W].W~ws3P<Mk45]0,[Isp9xX<B;');

define('AUTH_SALT', 'e6_-lRqxY*s{xe*P/E!a|!<hPp5PBdC=Fn`t`4]REO5jUD-Ce[tb?yQ0Uk~RgbuO');

define('SECURE_AUTH_SALT', 'U3|iEi2U u_Ixrh<C@+CGRE}lIQx|kc2|GQ[dH-<IkfoNuKg(Mfe9_^rhG96shEb');

define('LOGGED_IN_SALT', '.C2NcQKDvoCf<A9I;~~5m?Qox|;#8A907]L~Q!V-U36X&6p3N`l-JJ871BZ,hF#r');

define('NONCE_SALT', '$?8$f,-3mKB5!:AMYGvo1 DI2lt)0L<cg6j<)i#Br?nae6<8,KyVnD90z=k;-sL9');


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


/* ¡Eso es todo, deja de editar! Feliz blogging */


/** WordPress absolute path to the Wordpress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');



