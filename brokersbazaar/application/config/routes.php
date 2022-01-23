<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
//$route['^(?!other|controller).*']='Home/$0';

$route['index'] = 'Home/index';

$route['about/(:any)']='Home/page/$1';

$route['about_us'] = 'Home/about_us';
$route['vision'] = 'Home/vision';
$route['why_us'] = 'Home/why_us';
$route['our_team'] = 'Home/our_team';

$route['career'] = 'Home/career';
$route['career_submit'] = 'Home/career_submit';

$route['Services'] = 'Home/Services';
$route['search_compare'] = 'Home/search_compare';
$route['e_kyc'] = 'Home/e_kyc';
$route['legal_compliances'] = 'Home/legal_compliances';
$route['investment_ideas'] = 'Home/investment_ideas';
$route['verification'] = 'Home/verification';
$route['education'] = 'Home/education';
$route['certification'] = 'Home/certification';
$route['stock_market'] = 'Home/stock_market';
$route['mutual_funds'] = 'Home/mutual_funds';
$route['compliance'] = 'Home/compliance';
$route['insurance'] = 'Home/insurance';
$route['research'] = 'Home/research';
$route['Guide_For_Investors'] = 'Home/Guide_For_Investors';
$route['how_to_choose_your_service_provider'] = 'Home/how_to_choose_your_service_provider';
$route['investment_FAQ'] = 'Home/investment_FAQ';
$route['support'] = 'Home/support';
$route['Stock_Brokars'] = 'Home/Stock_Brokars';
$route['how_to_compare'] = 'Home/how_to_compare';
$route['news'] = 'Home/news';
$route['Loan'] = 'Home/Loan';
$route['Business_Loan'] = 'Home/Business_Loan';
$route['myaccount'] = 'User_dashboard/myaccount';
$route['Education_Loan'] = 'Home/Education_Loan';

$route['Loan_Against_Property'] = 'Home/Loan_Against_Property';
$route['Loan_Against_Securities'] = 'Home/Loan_Against_Securities';
$route['Personal_Loan'] = 'Home/Personal_Loan';
$route['Housing_Loan'] = 'Home/Housing_Loan';
$route['SME_Loan'] = 'Home/SME_Loan';
$route['How_It_Works'] = 'Home/How_It_Works';
$route['Startup_Loan'] = 'Home/Startup_Loan';
$route['more_vendor'] = 'Home/more_vendor';
$route['User/AuthToken/(:any)']='User/AuthToken/$1';
$route['profile/vendor/(:any)']='VendorFetch/vendorProfile/$1';

$route['connection']='VendorFetch/connection';

$route['logout'] = 'User/logout';



$route['404_override'] = 'Home/page404';
$route['translate_uri_dashes'] = FALSE;
