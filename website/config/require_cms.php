<?

// Import mọi thứ vào đây, khi dùng chỉ cần include file này vào là được

session_start();
mb_internal_encoding('UTF-8');
error_reporting(E_ALL);
ob_start();

$path_root      =   $_SERVER['DOCUMENT_ROOT'];
$path_website      =   $path_root . '/website';
$path_core      =   $path_root . '/core/';
$path_cms_core  =   $path_root . '/cms/core/';

require_once($path_website . '/components/classes/Layout.php');
require_once($path_website . '/config/function.php');
require_once($path_website . '/config/constant_web.php');

require_once($path_core . '/env/ConfigEnv.php');
include_once($path_core . 'config/constant_core.php');
include_once($path_cms_core . 'config/constant_cms.php');
require_once($path_core . 'function/function.php');
require_once($path_core . 'classes/Database.php');
require_once($path_core . 'model/Model.php');

require_once($path_core . 'classes/Router.php');
require_once($path_core . 'classes/Image.php');
require_once($path_core . 'classes/Upload.php');

require_once($path_cms_core . 'classes/Admin.php');
require_once($path_cms_core . 'classes/City.php');

include_once($path_core . 'config/config_core.php');
include_once($path_cms_core . 'config/config_cms.php');



$Layout = new Layout;
