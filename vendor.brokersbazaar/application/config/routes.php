<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Vendor';
//$route['^(?!other|controller).*']='welcome/$0';
$route['registration'] = 'Vendor/registration';

$route['logout'] = 'Vendor/logout';

$route['details'] = 'Vendor/details';
$route['home'] = 'Vendor/home';
$route['index'] = 'Vendor/index';

$route['404_override'] = 'Vendor/page404';
$route['translate_uri_dashes'] = FALSE;
