<?php
defined('ABSPATH') or die('No script kiddies please!');
require __DIR__."/vendor/autoload.php";
/**
 * Plugin Name: wp anigrab
 * Plugin URI: https://github.com/anigrab/wp-anigrab
 * Description: grab anime info and save to local wordpress post
 * Version: 1.0.0-beta
 * Author: Am K
 * Author URI: http://twitter.com/anak_it
 * License: MIT
 */

Ospek\WpAnigrab::register();
