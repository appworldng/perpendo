<?php
/**
 * Plugin Name:       Perpendo
 * Plugin URI:        https://github.com/perpendo/perpendo
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Perpendo
 * Author URI:        https://perpendo.no/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       perpendo
 * Domain Path:       /languages
 */

use Perpendo\Perpendo;

require_once(realpath('vendor/autoload.php'));

Perpendo::getInstance();

?>