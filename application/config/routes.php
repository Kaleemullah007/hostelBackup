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
$route['default_controller'] = 'welcome';
$route['admin-login'] = 'login/con_login/admin_login';
$route['staff-login'] = 'login/con_login/staff_login';
$route['student-login'] = 'login/con_login/student_login';
//////////////////// ajax requests for login validation /////////////
$route['admin-login-validate'] = 'login/con_login/admin_login_validate';
$route['staff-login-validate'] = 'login/con_login/staff_login_validate';
$route['staff-login-validate'] = 'login/con_login/student_login_validate';

//////////////////// admin routes ///////////////////////////////////
$route['adashboard'] 		   = 'admin/con_dashboard/admin_dashboard';
$route['aprofile']   		   = 'admin/con_dashboard/admin_profile';
$route['all-profiles']   	   = 'admin/con_profiles/profiles_home';
$route['student-profiles']     = 'admin/con_profiles/student_profiles_all';
$route['staff-profiles']   	   = 'admin/con_profiles/staff_profiles_all';
/////////////////////////form staff ajax routes//////////////////////////////
$route['insert-staff']         = 'admin/con_profiles/insert_staff';
$route['update-staff']         = 'admin/con_profiles/getupdate_staff';
$route['updated-staff']        = 'admin/con_profiles/updated_staff';
$route['view-staff']           = 'admin/con_profiles/view_staff';
$route['delete-staff']         = 'admin/con_profiles/delete_staff';
$route['all-staff-ajax']      = 'admin/con_profiles/staffajax_all';
$route['search-staff']      = 'admin/con_profiles/staffajaxsearch_all';
/////////////////////////////





$route['registration-home']    = 'admin/con_registration/registration_home';
$route['student-registration'] = 'admin/con_registration/student_registration';
$route['staff-registration']   = 'admin/con_registration/staff_registration';
/////////////////////////start of accounts routes /////////////////////////////////////////
$route['accounts-home']        = 'admin/con_accounts/accounts_home';
$route['generate-voucher']     = 'admin/con_accounts/generate_voucher';
$route['fee-payment']          = 'admin/con_accounts/fee_payment';


$route['income-statement']     = 'admin/con_accounts/income_statement';

$route['balance-sheet']        = 'admin/con_accounts/balance_sheet';
$route['approve-sallary']      = 'admin/con_accounts/approve_sallary';
/////////////////////////form ajax routes////////////////////////////////////////////////
$route['accounts-pending-staff-sallary-by-gender']       = 'admin/con_accounts/sallary_by_gender';
$route['accounts-pending-staff-sallary-by-designation']  = 'admin/con_accounts/sallary_by_designation';
$route['accounts-pending-staff-sallary-by-daterange']    = 'admin/con_accounts/sallary_by_daterange';
$route['accounts-pending-staff-sallary-by-monthyear']    = 'admin/con_accounts/sallary_by_monthyear';
$route['accounts-approve-sallary']          			 = 'admin/con_accounts/accounts_approve_sallary';
$route['accounts-single-sallary-view']          		 = 'admin/con_accounts/accounts_single_sallary_view';
$route['incomestatementajax']          		 = 'admin/con_accounts/income_statement_ajax';



/////////////////////////end of accounts routes /////////////////////////////////////////
/////////////////////////start of pending sallary routes //////////////////////////////////
$route['pending-sallary']       = 'admin/con_pending/pending_sallary';
/////////////////////////form ajax routes//////////////////////////////
$route['get-pending-staff-sallary-by-gender']       = 'admin/con_pending/sallary_by_gender';
$route['get-pending-staff-sallary-by-designation']  = 'admin/con_pending/sallary_by_designation';
$route['get-pending-staff-sallary-by-daterange']    = 'admin/con_pending/sallary_by_daterange';
$route['get-pending-staff-sallary-by-monthyear']    = 'admin/con_pending/sallary_by_monthyear';
$route['admin-forward-to-accounts-list']            = 'admin/con_pending/admin_forward_to_accounts_list';
$route['admin-forward-to-accounts-single']          = 'admin/con_pending/admin_forward_to_accounts_single';
/////////////////////////end of pening sallary routes ///////////////////////////////////
/////////////////////////start of hr routes //////////////////////////////////
$route['hrportion-home']       = 'admin/con_hrportion/hrportion_home';
$route['staff-sallary']        = 'admin/con_hrportion/staff_sallary';
$route['staff-attendance']     = 'admin/con_hrportion/staff_attendance';
/////////////////////////form ajax routes//////////////////////////////
$route['get-staff-sallary-by-gender']       = 'admin/con_hrportion/sallary_by_gender';
$route['get-staff-sallary-by-designation']  = 'admin/con_hrportion/sallary_by_designation';
$route['get-staff-sallary-by-daterange']    = 'admin/con_hrportion/sallary_by_daterange';
$route['get-staff-sallary-by-monthyear']    = 'admin/con_hrportion/sallary_by_monthyear';
$route['hr-forward-to-admin-list']               = 'admin/con_hrportion/hr_forward_to_admin_list';
$route['hr-forward-to-admin-single']               = 'admin/con_hrportion/hr_forward_to_admin_single';
/////////////////////////end of hr routes ///////////////////////////////////
/////////////////////////accomodation routes////////////////////////////////
$route['accomodation-home']    = 'admin/con_accomodation/accomodation_home';
$route['add-catagory']         = 'admin/con_accomodation/add_catagory';
$route['all-catagories']       = 'admin/con_accomodation/all_catagories';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-category']      = 'admin/con_accomodation/insert_category';
$route['update-category']      = 'admin/con_accomodation/getupdate_category';
$route['updated-category']     = 'admin/con_accomodation/updated_category';
$route['delete-category']      = 'admin/con_accomodation/delete_category';
$route['all-category-ajax']    = 'admin/con_accomodation/categoryajax_all';

$route['add-room']             = 'admin/con_accomodation/add_room';
$route['all-rooms']     	   = 'admin/con_accomodation/all_rooms';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-room']          = 'admin/con_accomodation/insert_room';
$route['update-room']          = 'admin/con_accomodation/getupdate_room';
$route['updated-room']         = 'admin/con_accomodation/updated_room';
$route['view-room']            = 'admin/con_accomodation/view_room';
$route['delete-room']          = 'admin/con_accomodation/delete_room';
$route['all-room-ajax']        = 'admin/con_accomodation/roomajax_all';
$route['check-if-exist']       = 'admin/con_accomodation/check_if_exist';
/////////////////////////end of accomodation routes///////////////////////
/////////////////////////inventory routes////////////////////////////////
$route['add-inventory']        = 'admin/con_inventory/add_inventory';
$route['all-inventory']        = 'admin/con_inventory/inventory_all';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-inventory']     = 'admin/con_inventory/insert_inventory';
$route['insert-withdraw']      = 'admin/con_inventory/insert_withdraw';
$route['view-inventory']       = 'admin/con_inventory/view_inventory';
$route['update-inventory']     = 'admin/con_inventory/getupdate_inventory';
$route['updated-inventory']    = 'admin/con_inventory/updated_inventory';
$route['all-inventory-ajax']   = 'admin/con_inventory/inventoryajax_all';
$route['delete-inventory']     = 'admin/con_inventory/delete_inventory';
$route['withdraw-inventory']   = 'admin/con_inventory/withdraw_inventory';
/////////////////////////end of inventory routes////////////////////////
/////////////////////////partners routes////////////////////////////////
$route['all-partners']         = 'admin/con_partners/partners_all';
$route['add-partner']          = 'admin/con_partners/add_partner';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-partner']       = 'admin/con_partners/insert_partner';
$route['update-partner']       = 'admin/con_partners/getupdate_partner';
$route['updated-partner']      = 'admin/con_partners/updated_partner';
$route['view-partner']         = 'admin/con_partners/view_partner';
$route['delete-partner']       = 'admin/con_partners/delete_partner';
$route['all-partners-ajax']    = 'admin/con_partners/partnersajax_all';
/////////////////////////end of partners routes/////////////////////////
/////////////////////////assets routes/////////////////////////////////
$route['add-asset']            = 'admin/con_assets/add_asset';
$route['all-assets']           = 'admin/con_assets/assets_all';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-asset']         = 'admin/con_assets/insert_asset';
$route['update-asset']         = 'admin/con_assets/getupdate_asset';
$route['updated-asset']        = 'admin/con_assets/updated_asset';
$route['view-asset']           = 'admin/con_assets/view_asset';
$route['delete-asset']         = 'admin/con_assets/delete_asset';
$route['all-assets-ajax']      = 'admin/con_assets/assetsajax_all';
/////////////////////////end of assets routes///////////////////////////


/////////////////////////Expense routes////////////////////////////////
$route['add-expense']        = 'admin/con_expense/add_expense';
$route['all-expense']        = 'admin/con_expense/expense_all';
/////////////////////////form ajax routes//////////////////////////////
$route['insert-expense']         = 'admin/con_expense/insert_expense';
$route['update-expense']         = 'admin/con_expense/getupdate_expense';
$route['updated-expense']        = 'admin/con_expense/updated_expense';
$route['all-expense-ajax']      = 'admin/con_expense/expenseajax_all';
$route['view-expense']           = 'admin/con_expense/view_expense';
$route['delete-expense']         = 'admin/con_expense/delete_expense';
/////////////////////////End of Expense route//////////////////////////////

/////////////////////////Expense routes///////////////////////////////////


/////////////////// admin logout ///////////////////////////////////
$route['alogout'] 			   = 'admin/con_dashboard/admin_logout';

//////////////////// staff routes /////////////////////////
//////////////////// student routes /////////////////////////


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
