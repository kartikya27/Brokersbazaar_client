<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Admin_control';
$route['about'] = 'Admin_control/about';
$route['index'] = 'Admin_control/index';
$route['contact'] = 'Admin_control/contact';
$route['services'] = 'Admin_control/services';

$route['solution'] = 'Admin_control/solution';
$route['newsletter'] = 'Admin_control/newsletter';

$route['blog'] = 'Admin_control/blog';


$route['login'] = 'Admin_control/login';

$route['order'] = 'Admin_control/order';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
