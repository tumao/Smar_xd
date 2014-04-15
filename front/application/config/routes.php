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


$route['default_controller'] = "main/index/index";
$route['product'] = "product/index/index";
$route['productdetail'] = "product/index/productdetail";
$route['company'] = "company/index/index";
$route['company/detail'] = "company/index/detail";
$route['lesson'] = "lesson/index/index";
$route['guide'] = "company/index/index";
$route['consult'] = "company/index/index";
$route['connect'] = "company/index/index";

$route['login']	= "admin/index/login";
$route['redbud_admin'] = "admin/index/index";
$route['redbud_admin/product'] = "admin/index/product";
$route['redbud_admin/company'] = "admin/index/company";
$route['redbud_admin/course'] = "admin/index/course";
$route['redbud_admin/daogou'] = "admin/index/daogou";
$route['redbud_admin/zixun'] = "admin/index/zixun";
$route['redbud_admin/contactus'] = "admin/index/contactus";
$route['redbud_admin/editaccount'] = "admin/index/editaccount";
$route['redbud_admin/upsertproduct'] = "admin/index/upsert_product";
$route['redbud_admin/upsertcompany'] = "admin/index/upsertcompany";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */