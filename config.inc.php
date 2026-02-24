<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pdo_Mysql', 'zeabur_');
$db->addServer(array (
  'host' => 'sjc1.clusters.zeabur.com',
  'port' => 25689,
  'user' => 'root',
  'password' => 'fElS3210qURsnQy4aNzkjd9685OWt7mJ',
  'charset' => 'utf8mb4',
  'database' => 'zeabur',
  'engine' => 'InnoDB',
  'sslCa' => NULL,
  'sslVerify' => false,
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);

