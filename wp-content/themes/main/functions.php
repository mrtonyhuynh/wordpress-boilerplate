<?php
$libs_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/beelory.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($libs_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'beelory'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);