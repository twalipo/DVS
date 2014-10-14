<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['med_config_delete/(:any)'] = 'dvscontroller/med_config_delete/$1';
$route['med_config_edit/(:any)'] = 'dvscontroller/med_config_edit/$1';
$route['med_config_registration/(:any)'] = 'dvscontroller/med_config_registration/$1';
$route['medical_drug_registration/(:any)'] = 'dvscontroller/medical_drug_registration/$1';
$route['med_config/(:any)'] = 'dvscontroller/medicine_configuration/$1';

$route['rfid_registration/(:any)'] = 'dvscontroller/rfid_registration/$1';
$route['rfid_submission/(:any)'] = 'dvscontroller/rfid_submission/$1';
$route['rfid_edit/(:any)'] = 'dvscontroller/rfid_edit/$1';
$route['rfid_delete/(:any)'] = 'dvscontroller/rfid_delete/$1';
$route['registration_view/(:any)'] = 'dvscontroller/registration_views/$1';

$route['tab_view/(:any)'] = 'dvscontroller/user_registration_tabs/$1';
$route['user_submission/(:any)'] = 'dvscontroller/user_submission/$1';
$route['user_edit/(:any)'] = 'dvscontroller/user_edit/$1';
$route['user_delete/(:any)'] = 'dvscontroller/user_delete/$1';

$route['(:any)'] = 'dvscontroller/index';
$route['default_controller'] = "dvscontroller/index";



/* End of file routes.php */
/* Location: ./application/config/routes.php */
