<?php

defined('APPLICATION_ENV') ||
  define('APPLICATION_ENV', getenv('APPLICATION_ENV'));

if (APPLICATION_ENV == 'development') {
  define('PAGE_EXECUTE_START', microtime());
}

defined('APPLICATION_PATH') ||
  define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

defined('LIBRARY_PATH') ||
  define('LIBRARY_PATH', realpath(dirname(__FILE__).'/../library'));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(LIBRARY_PATH),
    get_include_path(),
)));

include 'Keystone/Keystone.php';

$keystone = new Keystone();
$keystone->execute();

if (APPLICATION_ENV == 'development') {
  $page_execute_time = (microtime() - PAGE_EXECUTE_START);
  echo '<!-- Gen-time: '.$page_execute_time.' seconds -->';
}
