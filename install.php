<?php

global $ommexamen_db_version;
$ommexamen_db_version = "0.1";

function ommexamen_install() {
   global $wpdb;
   global $ommexamen_db_version;

   $table_name = $wpdb->prefix . "examen_27_1_problemas";
      
   $sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  texto text NOT NULL,
  imagen VARCHAR(55) DEFAULT '' NOT NULL,
  UNIQUE KEY id (id)
    );";

   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );


   $table_name = $wpdb->prefix . "examen_27_1_respuestas";
      
   $sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  problema_id mediumint(9) NOT NULL,
  correcta boolean NOT NULL DEFAULT false,
  texto tinytext NOT NULL,
  UNIQUE KEY id (id)
    );";

   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
   dbDelta( $sql );


 
   add_option( "ommexamen_db_version", $ommexamen_db_version );
}

function ommexamen_install_data() {
/*   global $wpdb;
   $welcome_name = "Mr. WordPress";
   $welcome_text = "Congratulations, you just completed the installation!";
   $table_name = $wpdb->prefix . "liveshoutbox";
   $rows_affected = $wpdb->insert( $table_name, array( 'time' => current_time('mysql'), 'name' => $welcome_name, 'text' => $welcome_text ) );
*/
}


?>
