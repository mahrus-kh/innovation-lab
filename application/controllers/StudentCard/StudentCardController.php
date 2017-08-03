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
    $this->load->library('Datatables');
    $this->load->model('StudentCard/StudentCardModel');
  }
  public function index()
  {
    $data['title'] = "Student Card";
    $this->load->view('StudentCard/index',$data);
    $this->load->view('StudentCard/modal-add-sc');
  }
  public function show_data()
  {
    if ($this->input->is_ajax_request()) {
      echo $this->StudentCardModel->show_data();
    }
  }
  public function add()
  {
    $data = $this->input->post;
    var_dump($_FILES['foto']['name']);

    // $this->load->library('upload', $this->StudentCardModel->conf_upload());
    // if ($_FILES['foto']['name']) {
    //     echo "string";
    // }
    // else {
    //   echo "tidak ada apapun";
    // }
  }
  public function edit()
  {
    $data['title'] = "Student Card - Detail & Edit";
    $this->load->view('StudentCard/edit', $data);
  }
  public function coba()
  {
    echo $this->StudentCardModel->show_data();
  }
  public function trash()
  {
    $this->load->view('StudentCard/hapus');
  }
  public function count_student_card()
  {
    if ($this->input->is_ajax_request()) {
        echo json_encode($this->StudentCardModel->count_student_card());
    }
  }
}
?>
