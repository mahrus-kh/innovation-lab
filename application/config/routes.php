<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login/show'] = 'Login/LoginController/index'; //show login form

$route['student-card/show'] = 'StudentCard/StudentCardController/index'; //show data index
$route['student-card/count_student_card'] = 'StudentCard/StudentCardController/count_student_card'; //Count Student Card via Ajax
$route['student-card/show_data'] = 'StudentCard/StudentCardController/show_data'; //Request Data Student Card via Ajax
$route['student-card/add'] = 'StudentCard/StudentCardController/add'; //save Student Card via Ajax
$route['student-card/trash/:num'] = 'StudentCard/StudentCardController/trash'; //Trash Student Card
$route['student-card/edit/:num'] = 'StudentCard/StudentCardController/edit'; //Detail, Edit, Update Studet Card Data via url
$route['student-card/coba'] = 'StudentCard/StudentCardController/coba'; //try

$route['left-stuff/show'] = 'LeftStuff/LeftStuffController/index'; //show data index
$route['left-stuff/show_data'] = 'LeftStuff/LeftStuffController/show_data'; //Request Data Left Stuff via Ajax
$route['left-stuff/trash'] = 'LeftStuff/LeftStuffController/trash'; //Send Data To Trash via Ajax
$route['left-stuff/count_stuff'] = 'LeftStuff/LeftStuffController/count_stuff'; //Count Stuff via Ajax
$route['left-stuff/add'] = 'LeftStuff/LeftStuffController/add'; //Save Left Stuff using Ajax
$route['left-stuff/edit'] = 'LeftStuff/LeftStuffController/edit'; //Edit/ Read Left Stuff using Ajax
$route['left-stuff/update'] = 'LeftStuff/LeftStuffController/update'; //Update Left Stuff using Ajax

$route['left-stuff/insert_dummy'] = 'LeftStuff/LeftStuffController/insert_dummy';

$route['certification/show'] = 'Certification/CertificationController/index';
