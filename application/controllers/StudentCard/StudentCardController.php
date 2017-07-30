<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class StudentCardController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['title'] = "Student Card";
    $this->load->view('StudentCard/index',$data);
  }
}
?>
