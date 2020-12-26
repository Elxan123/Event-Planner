<?php

$route['become-partner'] = "Bepartner/index";

$route['become-partner-provider'] = "Bepartner/provider_register";
$route['become-partner-provider-submit'] = "Bepartner/provider_register_submit";

$route['become-partner-establishment'] = "Bepartner/establishment_register";
$route['become-partner-establishment-submit'] = "Bepartner/establishment_register_submit";

$route['establishment/general-info'] = "admin/establishment/Generalinformation/general_information";
$route['establishment/general-info-update'] = "admin/establishment/Generalinformation/general_information_update";


$route['establishment/gallery'] = "admin/establishment/Generalinformation/gallery";
$route['establishment/gallery-add'] = "admin/establishment/Generalinformation/gallery_add";
$route['establishment/gallery-delete/(:any)'] = "admin/establishment/Generalinformation/gallery_delete/$1";
$route['establishment/gallery-refresh'] = "admin/establishment/Generalinformation/gallery_refresh_page";

$route['establishment/calendar'] = "admin/establishment/Generalinformation/calendar";


$route['establishment/choose-event-category'] = "admin/establishment/Generalinformation/event_category";
$route['establishment/add-event-category'] = "admin/establishment/Generalinformation/event_category_add";
$route['establishment/add-event-category-action'] = "admin/establishment/Generalinformation/event_category_add_action";
$route['establishment/delete-event-category/(:any)'] = "admin/establishment/Generalinformation/event_category_delete/$1";



$route['providers/choose-event-category'] = "admin/provider/GeneralinformationProvider/event_category";
$route['providers/add-event-category'] = "admin/provider/GeneralinformationProvider/event_category_add";
$route['providers/add-event-category-action'] = "admin/provider/GeneralinformationProvider/event_category_add_action";
$route['providers/delete-event-category/(:any)'] = "admin/provider/GeneralinformationProvider/event_category_delete/$1";




$route['providers/general-info'] = "admin/provider/GeneralinformationProvider/general_information";
$route['providers/general-info-update'] = "admin/provider/GeneralinformationProvider/general_information_update";

$route['providers/choose-service'] = "admin/provider/GeneralinformationProvider/services";
$route['providers/add-service'] = "admin/provider/GeneralinformationProvider/services_add";
$route['providers/add-service-action'] = "admin/provider/GeneralinformationProvider/services_add_action";
$route['providers/delete-service/(:any)'] = "admin/provider/GeneralinformationProvider/services_delete/$1";

$route['providers/gallery'] = "admin/provider/GeneralinformationProvider/gallery";
$route['providers/gallery-add'] = "admin/provider/GeneralinformationProvider/gallery_add";
$route['providers/gallery-delete/(:any)'] = "admin/provider/GeneralinformationProvider/gallery_delete/$1";
$route['providers/gallery-refresh'] = "admin/provider/GeneralinformationProvider/gallery_refresh_page";



$route['event-organize'] = "EventOrganize/index";
$route['event-organize-services'] = "EventOrganize/services";
$route['event-organize-establishments'] = "EventOrganize/establishments";


$route['provider-single/(:any)'] = "ProviderSingle/index/$1";
$route['provider-single-register/(:any)'] = "ProviderSingle/register/$1";
$route['provider-single-register-action/(:any)'] = "ProviderSingle/register_action/$1";


$route['establishment-single/(:any)'] = "Establishmentsingle/index/$1";
$route['establishment-single-register/(:any)'] = "Establishmentsingle/register/$1";
$route['establishment-single-register-action/(:any)'] = "Establishmentsingle/register_action/$1";

$route['register-success'] = "ProviderSingle/success";


