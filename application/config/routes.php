<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['student-data/show'] = 'StudentData/StudentDataController/index';
$route['student-card/show'] = 'StudentCard/StudentCardController/index';

$route['left-stuff/show'] = 'LeftStuff/LeftStuffController/index'; //show data index
$route['left-stuff/show_data'] = 'LeftStuff/LeftStuffController/show_data'; //Request Data Left Stuff via Ajax
$route['left-stuff/trash'] = 'LeftStuff/LeftStuffController/trash'; //Send Data To Trash via Ajax
$route['left-stuff/count_stuff'] = 'LeftStuff/LeftStuffController/count_stuff'; //Count Stuff via Ajax
$route['left-stuff/add'] = 'LeftStuff/LeftStuffController/add'; //Save Left Stuff using Ajax
$route['left-stuff/edit'] = 'LeftStuff/LeftStuffController/edit'; //Edit/ Read Left Stuff using Ajax
$route['left-stuff/update'] = 'LeftStuff/LeftStuffController/update'; //Update Left Stuff using Ajax

$route['certification/show'] = 'Certification/CertificationController/index';


$route['left-stuff/hand'] = 'LeftStuff/LeftStuffController/hand';
$route['left-stuff/insert_dummy'] = 'LeftStuff/LeftStuffController/insert_dummy';
