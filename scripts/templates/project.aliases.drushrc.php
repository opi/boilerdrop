<?php

/**
 * Doc
 */

/**
 * Commons
 */
$exclude_tables = array(
  'cache',
  'cache_admin_menu',
  'cache_block',
  'cache_bootstrap',
  'cache_field',
  'cache_filter',
  'cache_form',
  'cache_image',
  'cache_l10n_update',
  'cache_menu',
  'cache_metatag',
  'cache_page',
  'cache_path',
  'cache_token',
  'cache_update',
  'cache_variable',
  'cache_views',
  'cache_views_data',
  'history',
  'sessions',
  'watchdog'
);

$rsync = array(
  'mode' => 'rlzO',
  'exclude-paths' => ':js:css:styles:languages:less'
);


/**
 * Aliases
 */

$aliases['local'] = array(
  'uri' => '@@PROJECT_NAME@@',
  'root' => '@@DOCROOT_PATH@@',
  'path-aliases' => array(
    '%files' => 'files',
    '%dump' => '/tmp/drush-sql-sync-local.sql',
    '%dump-dir' => '/tmp',
  ),
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache' => '1',
      'simulate' => '0',
      'structure-tables' => array(
        'custom' => $exclude_tables,
      ),
    ),
    'core-rsync' => $rsync,
  ),
);