<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Employee URL
$route['employee-lists'] = 'EmployeeController/lists';
$route['add-employee'] = 'EmployeeController/addEmployee';
$route['employee-store'] = 'EmployeeController/employeeStore';
$route['employee-edit/(:num)'] = 'EmployeeController/employeeEdit/$1';
$route['employee-update/(:num)'] = 'EmployeeController/employeeUpdate/$1';
$route['employee-delete/(:num)'] = 'EmployeeController/employeeDelete/$1';
