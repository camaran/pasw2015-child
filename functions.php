<?php
class pasw2015_child_theme {

    static $instance = false;
        
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_parent_theme_style') );
    }

    public static function getInstance() {
		  if ( !self::$instance )
			  self::$instance = new self;
		  return self::$instance;
	  }
 
    function enqueue_parent_theme_style()  {
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }
}
$pasw2015_child_theme = pasw2015_child_theme::getInstance();
?>
