<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "Products";
$route['add'] = "Products/add";
$route['edit/(:num)'] = "Products/edit/$1";
$route['show/(:num)'] = "Products/show/$1";
$route['destroy/(:num)'] = "Products/destroy/$1";
$route['update/(:num)'] = "Products/update/$1";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */