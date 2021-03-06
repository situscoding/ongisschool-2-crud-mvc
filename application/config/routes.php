<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Biodatacontroller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'Dashboardcontroller/index';
$route['biodata'] = 'biodatacontroller/index';
$route['input'] = 'biodatacontroller/input';
$route['edit/(:any)'] = 'biodatacontroller/edit/$1';

$route['create'] = 'biodatacontroller/create';
$route['read/(:any)'] = 'biodatacontroller/read/$1';
$route['update'] = 'biodatacontroller/update';
$route['delete/(:any)'] = 'biodatacontroller/delete/$1';
