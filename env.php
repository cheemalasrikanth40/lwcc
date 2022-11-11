<?php
return array (
  'cache' =>
  array (
    'frontend' =>
    array (
      'default' =>
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' =>
        array (
          'server' => '127.0.0.1',
          'port' => 6379,
          'database' => 1,
        ),
        'id_prefix' => 'f53_',
      ),
      'page_cache' =>
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' =>
        array (
          'server' => '127.0.0.1',
          'port' => 6379,
          'database' => 2,
        ),
        'id_prefix' => 'f53_',
      ),
    ),
    'allow_parallel_generation' => false,
  ),
  'MAGE_MODE' => 'production',
  'cache_types' =>
  array (
    'compiled_config' => 1,
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'full_page' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'target_rule' => 1,
    'config_webservice' => 1,
    'translate' => 1,
    'vertex' => 1,
    'wp_gtm_categories' => 1,
  ),
  'cron' =>
  array (
  ),
  'backend' =>
  array (
    'frontName' => 'admin',
  ),
  'db' =>
  array (
    'connection' =>
    array (
      'default' =>
      array (
        'host' => '127.0.0.1',
        'username' => 'magento',
        'dbname' => 'magento',
        'password' => 'magento',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
        'driver_options' =>
        array (
          1014 => false,
        ),
      ),
      'indexer' =>
      array (
        'host' => '127.0.0.1',
        'username' => 'magento',
        'dbname' => 'magento',
        'password' => 'magento',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
        'persistent' => NULL,
      ),
    ),
    'table_prefix' => '',
  ),
  'crypt' =>
  array (
    'key' => 'a5e2a549c88504ad27f07b44887ebfbb',
  ),
  'resource' =>
  array (
    'default_setup' =>
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'session' =>
  array (
    'save' => 'redis',
    'redis' =>
    array (
      'host' => '127.0.0.1',
      'port' => 6379,
      'database' => 0,
      'disable_locking' => 1,
    ),
  ),
  'lock' =>
  array (
    'provider' => 'db',
    'config' =>
    array (
      'prefix' => '',
    ),
  ),
  'install' =>
  array (
    'date' => 'Mon, 03 Jun 2019 23:49:26 +0000',
  ),
  'static_content_on_demand_in_production' => 0,
  'force_html_minification' => 1,
  'cron_consumers_runner' =>
  array (
    'cron_run' => false,
    'max_messages' => 10000,
    'consumers' =>
    array (
    ),
  ),
  'system' =>
  array (
    'default' =>
    array (
      'catalog' =>
      array (
        'search' =>
        array (
          'engine' => 'elasticsearch7',
          'elasticsearch7_server_hostname' => '127.0.0.1',
          'elasticsearch7_server_port' => 9200,
        ),
      ),
    ),
  ),
  'directories' =>
  array (
    'document_root_is_pub' => true,
  ),
  'queue' =>
  array (
    'consumers_wait_for_messages' => 0,
  ),
  'downloadable_domains' =>
  array (
    0 => 'master-7rqtwti-5xc2bzxuexzme.us-3.magentosite.cloud',
    1 => 'batchmedia.s3.us-east-2.amazonaws.com',
  ),
  'remote_storage' =>
  array (
    'driver' => 'file',
  ),
);

