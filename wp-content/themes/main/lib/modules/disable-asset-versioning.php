<?php

namespace Beelory\DisableAssetVersioning;

/**
 * Remove version query string from all styles and scripts
 *
 * You can enable/disable this feature in functions.php (or lib/setup.php):
 * add_theme_support('beelory-disable-asset-versioning');
 */
function remove_script_version($src) {
  return $src ? esc_url(remove_query_arg('ver', $src)) : false;
}
add_filter('script_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);
add_filter('style_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);
