#!/usr/bin/env php
<?php
$lib_root = './whb_tools';
$CorePath =realpath($lib_root.'/lib/Core.php');
require $CorePath;

defined('APP_ROOT') or define('APP_ROOT','./app');
defined('CONTROLLER_ROOT') or define('CONTROLLER_ROOT',APP_ROOT.'/Http/Controllers/Admin');
defined('DATATABLE_ROOT') or define('DATATABLE_ROOT',APP_ROOT.'/DataTables');
defined('REPOSITORY_ROOT') or define('REPOSITORY_ROOT',APP_ROOT.'/Repositories/Admin');
defined('REQUEST_ROOT') or define('REQUEST_ROOT',APP_ROOT.'/Http/Requests/Admin');
defined('SERVICE_ROOT') or define('SERVICE_ROOT',APP_ROOT.'/Services');
defined('MODEL_ROOT') or define('MODEL_ROOT',APP_ROOT.'/Models');
defined('RESOURCE_ROOT') or define('RESOURCE_ROOT','./resources/views/admin');
defined('ROUTES_ROOT') or define('ROUTES_ROOT','./routes');

$client = new Core(realpath($lib_root));
$client->run();
exit("生成完毕...\n");