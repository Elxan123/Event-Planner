<?php
//login - register
$route['login'] = 'Login/index';
$route['login_act'] = 'Login/login_act';
$route['register_act'] = 'Login/register_act';

//logout
$route['logout'] = 'Login/logout';

//Dashboard
$route['dashboard'] = 'admin/Dashboard/index';


//Categories
$route['categories'] = 'admin/Categories/index';
$route['category_add'] = 'admin/Categories/add';
$route['category_add_act'] = 'admin/Categories/add_act';
$route['category_update/(:any)'] = 'admin/Categories/update/$1';
$route['category_update_act/(:any)'] = 'admin/Categories/update_act/$1';
$route['category_delete/(:any)'] = 'admin/Categories/delete/$1';

//Cities
$route['cities'] = 'admin/Cities/index';
$route['city_add'] = 'admin/Cities/add';
$route['city_add_act'] = 'admin/Cities/add_act';
$route['city_update/(:any)'] = 'admin/Cities/update/$1';
$route['city_update_act/(:any)'] = 'admin/Cities/update_act/$1';
$route['city_delete/(:any)'] = 'admin/Cities/delete/$1';

//Services
$route['services'] = 'admin/Services/index';
$route['service_add'] = 'admin/Services/add';
$route['service_add_act'] = 'admin/Services/add_act';
$route['service_update/(:any)'] = 'admin/Services/update/$1';
$route['service_update_act/(:any)'] = 'admin/Services/update_act/$1';
$route['service_delete/(:any)'] = 'admin/Services/delete/$1';

//Appeals
$route['estab_approve'] = 'admin/Appeals/estab';
$route['provider_approve'] = 'admin/Appeals/provider';
$route['approve_appeal/(:any)/(:any)'] = 'admin/Appeals/approve/$1/$2';
$route['reject_appeal/(:any)/(:any)'] = 'admin/Appeals/reject/$1/$2';
