<?php

/**
 * Get Pantheon settings.
 */
if (!empty($_SERVER['PRESSFLOW_SETTINGS'])) {
  $env = json_decode($_SERVER['PRESSFLOW_SETTINGS'], TRUE);
  if (!empty($env['conf']['pantheon_binding'])) {
    $pantheon_conf = $env['conf'];
  }
}

/**
 * The directory name where civicrm.settings.php file is located.
 * Used where CiviCRM is part of an install profile like CiviCRM Starterkit.
 */
if (!defined('CIVICRM_CONFDIR')) {
  if (isset($pantheon_conf)) {
    define( 'CIVICRM_CONFDIR', '/srv/bindings/' . $pantheon_conf['pantheon_binding'] . '/code/sites/default/' );
  }
}
