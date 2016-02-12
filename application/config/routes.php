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

$route['default_controller'] = "welcome";
$route['sleep'] = "first/zzz";
//route to the zxzz()function in the first controller
$route['lock/(:any)/(:any)'] = "welcome/shucks";
//route to the shucks()function in the welcome controller
$route['show/(:num)'] = "first/gimme/3";
//route to first controller, gimme method, 3() function
$route['dunno'] = function() {
    $source = './data/surprise.jpg'; //an image you provide
    //set the mime type for that image
    header("Content-type: image/jpeg");
    header('Content-Disposition: inline');
    readfile($source); //dish it
    die(); //and we don't have to go any further
};
$route['([a-z]{4})/bingo'] = "bingo";
//remapped a regular expression in ordere to route to the Bingo controller
$route['404_override'] = '';
$route['([a-z]+)(\d+)/([a-z]+)'] = "wise/bingo";
//As long as #1 is a string of alphanumeric followed by numeric, and $2 is 
//numeric, it will route to the bingo() function in the wise controller

/* End of file routes.php */
/* Location: ./application/config/routes.php */