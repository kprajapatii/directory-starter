<?php
/*
Author: GeoDirectory Team
Author URI: http://wpgeodirectory.com

To manage your codebase properly, you should place all your functions in 'lib' folder.
Include each function file here.
*/

// Define the version number for quick access
if (!defined('DIRECTORY_STARTER_VER')) define('DIRECTORY_STARTER_VER', '2.1.0.4');

require_once('vendor/autoload.php');       // Composer autoload
require_once('lib/utils.php');             // Utility functions goes here
require_once('lib/config.php');            // Configuration goes here
require_once('lib/init.php');              // Theme setup functions goes here
require_once('lib/cleanup.php');           // Cleanup functions goes here
require_once('lib/scripts.php');           // CSS and JS includes goes here
require_once('lib/nav.php');               // Nav menu functions goes here
require_once('lib/sidebars.php');          // Register your sidebars here
require_once('lib/widgets.php');           // Widget functions goes here
require_once('lib/comments.php');          // Comments functions goes here
require_once('lib/entrymeta.php');         // Entry meta functions goes here
require_once('lib/custom.php');            // Any custom functions goes here
require_once('lib/gd.php');                // GeoDirectory functions goes here
require_once('lib/admin/customizer.php');  // Customizer settings
require_once('lib/styles.php');            // CSS generated by customizer
require_once('lib/dummy.php');             // Dummy post functions goes here
require_once('lib/libraries/wp-bootstrap-comments.php');             // Bootstrap comments walker
require_once('lib/class-downgrade.php');   // Downgrade theme functionality