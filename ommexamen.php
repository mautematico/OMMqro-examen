<?php
/*
Plugin Name: OMMQro - Exámenes en línea
Plugin URI: http://ommqro.mx
Description: Genera y evalúa exámenes tomando problemas de una base de datos predefinida.
Author: Mauricio Navarro Miranda
Version: 0.1
Author URI: http://blog.mautematico.com
*/

include_once dirname( __FILE__ ) . '/install.php';
register_activation_hook( __FILE__, array( 'ommexamen_install' ) );


?>
