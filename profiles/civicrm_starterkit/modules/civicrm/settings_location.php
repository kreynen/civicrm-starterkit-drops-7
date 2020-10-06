<?php

/**
 * The directory name where civicrm.settings.php file is located.
 * Used where CiviCRM is part of an install profile like CiviCRM Starterkit.
 */
if (!defined('CIVICRM_CONFDIR')) {
  if (!empty($_ENV['PANTHEON_SITE'])) {
    $pantheon_home = $_ENV['HOME'] . ($_ENV['HOME'] !== '/' ? '/' : '');
    define( 'CIVICRM_CONFDIR', $pantheon_home . 'code/sites/default/' );
  }
}
