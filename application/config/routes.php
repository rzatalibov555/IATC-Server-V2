<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


			// User start
$route['default_controller']    = 'UserController';
$route['index']                 = 'UserController/index';
$route['about']                 = 'UserController/about';
$route['single']                = 'UserController/single';
$route['contact']               = 'UserController/contact';
$route['error404']              = 'UserController/error404';


$route['gallery'] 				= 'UserController/gallery';
$route['gallery_single/(.*)'] 	= 'UserController/gallery_single/$1';


$route['sign_in']               = 'UserController/sign_in';
$route['sign_up']               = 'UserController/sign_up';

$route['blog']                  = 'UserController/blog';
$route['blog_single/(.*)']      = 'UserController/blog_single/$1';

$route['instructor']            = 'UserController/instructor';
$route['instructor_single/(.*)']= 'UserController/instructor_single/$1';

$route['courses']               = 'UserController/courses';
$route['course_single/(.*)']    = 'UserController/course_single/$1';

$route['category_list']         = 'UserController/category_list';

$route['category/(.*)']         = 'UserController/category/$1';

$route['events']                = 'UserController/events';
$route['event-details/(.*)']    = 'UserController/events_single/$1';
			// User end

			
			// Admin start
$route['admin_login']		                    = 'AdminController/index';
$route['admin_loginAct']	                    = 'AdminController/loginAct';
$route['admin_logout']	                        = 'AdminController/logout';
$route['admin_dashboard'] 	                    = 'AdminController/dashboard';

$route['admin_delete_admin/(.*)']	            = 'AdminController/delete_admin/$1';

$route['admin_updateAdmin/(.*)']	            = 'AdminController/updateAdmin/$1';
$route['admin_updateAdminAct/(.*)']	            = 'AdminController/updateAdminAct/$1';

$route['admin_removeAdminIMg/(.*)']	            = 'AdminController/removeAdminIMg/$1';

$route['admin_change_password/(.*)']            = 'AdminController/change_password/$1';
$route['admin_change_passwordAct/(.*)']	        = 'AdminController/change_passwordAct/$1';
$route['admin_change_password_reset/(.*)']	    = 'AdminController/change_password_reset/$1';
$route['admin_change_password_resetAct/(.*)']	= 'AdminController/change_password_resetAct/$1';


$route['admin_creatAdmin'] 	                    = 'AdminController/creatAdmin';
$route['admin_creatAdminAct'] 	                = 'AdminController/creatAdminAct';
// Admin end





// Admin Items
$route['admin_item_list']	          = 'ItemController/index';
$route['admin_create_item']	          = 'ItemController/createItem';
$route['admin_create_item_act']       = 'ItemController/createItemAct';
$route['admin_update_form/(.*)']      = 'ItemController/update_form/$1';
$route['admin_updateItemAct/(.*)']    = 'ItemController/updateItemAct/$1';
$route['admin_deleteItem/(.*)']       = 'ItemController/delete/$1';
$route['admin_detail_form/(.*)']      = 'ItemController/detail_form/$1';
$route['admin_is_active_set']  		  = 'ItemController/isActiveSet';


// Admin Course
$route['admin_item_c_list']	                = 'Item2Controller/index';
$route['admin_create_item_c']	            = 'Item2Controller/createItem';

$route['admin_create_item_c_p/(.*)']        = 'Item2Controller/createProgramm/$1';
$route['admin_create_item_c_p_act/(.*)']    = 'Item2Controller/createProgramm_act/$1';
$route['admin_create_item_c_p_delete/(.*)'] = 'Item2Controller/deleteProgramm_act/$1';

$route['admin_create_item_c_act']     = 'Item2Controller/createItemAct';
$route['admin_update_form_c/(.*)']    = 'Item2Controller/update_form/$1';
$route['admin_updateItem_cAct/(.*)']  = 'Item2Controller/updateItemAct/$1';
$route['admin_deleteItem_c/(.*)']     = 'Item2Controller/delete/$1';
$route['admin_detail_form_c/(.*)']    = 'Item2Controller/detail_form/$1';
$route['admin_is_active_set_item_c']  = 'Item2Controller/isActiveSet';


//===============================  EVENTS  ===================================================

$route['admin_item_ev_list']	         = 'Item10Controller/index';
$route['admin_create_item_ev']	         = 'Item10Controller/createItem';

$route['admin_create_item_ev_p/(.*)']        = 'Item10Controller/createProgramm/$1';
$route['admin_create_item_ev_p_act/(.*)']    = 'Item10Controller/createProgramm_act/$1';
$route['admin_create_item_ev_p_delete/(.*)'] = 'Item10Controller/deleteProgramm_act/$1';

$route['admin_create_item_ev_act']     = 'Item10Controller/createItemAct';
$route['admin_update_form_ev/(.*)']    = 'Item10Controller/update_form/$1';
$route['admin_updateItem_evAct/(.*)']  = 'Item10Controller/updateItemAct/$1';
$route['admin_deleteItem_ev/(.*)']     = 'Item10Controller/delete/$1';
$route['admin_detail_form_ev/(.*)']    = 'Item10Controller/detail_form/$1';
$route['admin_is_active_set_item_ev']  = 'Item10Controller/isActiveSet';

//===============================  EVENTS  ===================================================

//===============================  SLIDER  ===================================================

// Admin Slider
$route['admin_item_sl_list']	      = 'Item6Controller/index';
$route['admin_create_item_sl']	      = 'Item6Controller/createItem';
$route['admin_create_item_sl_act']    = 'Item6Controller/createItemAct';
$route['admin_update_form_sl/(.*)']   = 'Item6Controller/update_form/$1';
$route['admin_updateItem_slAct/(.*)'] = 'Item6Controller/updateItemAct/$1';
$route['admin_deleteItem_sl/(.*)']    = 'Item6Controller/delete/$1';
$route['admin_detail_form_sl/(.*)']   = 'Item6Controller/detail_form/$1';
$route['admin_is_active_set_item_sl'] = 'Item6Controller/isActiveSet';

//===============================  SLIDER  ===================================================

// Admin Teachers
$route['admin_item_t_list']	          = 'Item3Controller/index';
$route['admin_create_item_t']	      = 'Item3Controller/createItem';
$route['admin_create_item_t_act']     = 'Item3Controller/createItemAct';
$route['admin_update_form_t/(.*)']    = 'Item3Controller/update_form/$1';
$route['admin_updateItem_tAct/(.*)']  = 'Item3Controller/updateItemAct/$1';
$route['admin_deleteItem_t/(.*)']     = 'Item3Controller/delete/$1';
$route['admin_detail_form_t/(.*)']    = 'Item3Controller/detail_form/$1';
$route['admin_is_active_set_item_t']  = 'Item3Controller/isActiveSet';




// Admin Certificates
$route['admin_item_ce_list']	      = 'Item8Controller/index';
$route['admin_create_item_ce']	      = 'Item8Controller/createItem';
$route['admin_create_item_ce_act']    = 'Item8Controller/createItemAct';
$route['admin_update_form_ce/(.*)']   = 'Item8Controller/update_form/$1';
$route['admin_updateItem_ceAct/(.*)'] = 'Item8Controller/updateItemAct/$1';
$route['admin_deleteItem_ce/(.*)']    = 'Item8Controller/delete/$1';
$route['admin_detail_form_ce/(.*)']   = 'Item8Controller/detail_form/$1';
$route['admin_is_active_set_item_ce'] = 'Item8Controller/isActiveSet';



// AdminController
// ItemController
// Item2Controller
// Item3Controller
// Item4Controller
// Item5Controller
// Item6Controller
// Item7Controller
// Item8Controller
// Item9Controller
// Item10Controller








// Admin About
$route['admin_item_ab_list']	      = 'Item4Controller/index';
$route['admin_create_item_ab']	      = 'Item4Controller/createItem';
$route['admin_create_item_ab_act']    = 'Item4Controller/createItemAct';
$route['admin_update_form_ab/(.*)']   = 'Item4Controller/update_form/$1';
$route['admin_updateItem_abAct/(.*)'] = 'Item4Controller/updateItemAct/$1';
$route['admin_deleteItem_ab/(.*)']    = 'Item4Controller/delete/$1';
$route['admin_detail_form_ab/(.*)']   = 'Item4Controller/detail_form/$1';
$route['admin_is_active_set_item_ab'] = 'Item4Controller/isActiveSet';

// Admin Contact
$route['admin_item_co_list']	      = 'Item5Controller/index';
$route['admin_create_item_co']	      = 'Item5Controller/createItem';
$route['admin_create_item_co_act']    = 'Item5Controller/createItemAct';
$route['admin_update_form_co/(.*)']   = 'Item5Controller/update_form/$1';
$route['admin_updateItem_coAct/(.*)'] = 'Item5Controller/updateItemAct/$1';
$route['admin_deleteItem_co/(.*)']    = 'Item5Controller/delete/$1';
$route['admin_detail_form_co/(.*)']   = 'Item5Controller/detail_form/$1';
$route['admin_is_active_set_item_co'] = 'Item5Controller/isActiveSet';



// Admin Training // Programm
$route['admin_item_tr_list']	      = 'Item7Controller/index';
$route['admin_create_item_tr/(.*)']	  = 'Item7Controller/createItem/$1';

$route['admin_create_item_tr_act/(.*)'] = 'Item7Controller/createItemAct/$1';
$route['admin_update_form_tr/(.*)']   = 'Item7Controller/update_form/$1';
$route['admin_updateItem_trAct/(.*)'] = 'Item7Controller/updateItemAct/$1';
$route['admin_deleteItem_tr/(.*)']    = 'Item7Controller/delete/$1';
$route['admin_detail_form_tr/(.*)']   = 'Item7Controller/detail_form/$1';
$route['admin_is_active_set_item_tr'] = 'Item7Controller/isActiveSet';






// Admin Register
$route['admin_item_re_list']	      = 'Item9Controller/index';
$route['admin_create_item_re']	      = 'Item9Controller/createItem';
$route['admin_create_item_re_act']    = 'Item9Controller/createItemAct';
$route['admin_update_form_re/(.*)']   = 'Item9Controller/update_form/$1';
$route['admin_updateItem_reAct/(.*)'] = 'Item9Controller/updateItemAct/$1';
$route['admin_deleteItem_re/(.*)']    = 'Item9Controller/delete/$1';
$route['admin_detail_form_re/(.*)']   = 'Item9Controller/detail_form/$1';
$route['admin_is_active_set_item_re'] = 'Item9Controller/isActiveSet';
