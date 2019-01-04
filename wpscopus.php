<?php
/**
 * Plugin Name: WpScopus
 * Plugin URI: https://github.com/the16thpythonist/wp-scopus-plugin
 * Description: Wordpress Scopus science
 * Author: Jonas Teufel
 * Version: 0.0.0.0
 * Author URI: google.com
 * License: GPLv2 or later
 */

namespace WpScopus;

require_once __DIR__ . '/vendor/autoload.php';

use the16thpythonist\Wordpress\Scopus\WpScopus;

// ##################################
// ## THE SCOPUS API KEY GOES HERE ##
// ##################################
WpScopus::register('a', '{REPLACE ME WITH THE API KEY !}');