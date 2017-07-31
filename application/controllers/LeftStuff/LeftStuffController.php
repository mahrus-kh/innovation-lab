<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class LeftStuffController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('LeftStuff/LeftStuffModel');
  }
  function insert_dummy(){
       $jumlah_data = 25;
       for ($i=1;$i<=$jumlah_data;$i++){
           $data   =   array(
               "stuff_name" => "Stuff".$i,
               "location" => "Lokasi$i",
               "posted_at" => "2017-07-11 22:21:28",
               "who_posted" => "Mahrus" . $i,
               "taken_at" => "2017-07-14 12:21:28",
               "who_taken" => "Khomaini" .$i,
               "status" => '<label class="text-success">Taken</label>',
               "etc" => "ect $i" );

           $this->db->insert('tb_left_stuff',$data);
       }
       echo $i.' Data Berhasil Di Insert';
   }
  public function index()
  {
    $data['title'] = "Left Stuff";
    $this->load->view('LeftStuff/index',$data);
    $this->load->view('LeftStuff/modal-trash');
    $this->load->view('LeftStuff/modal-left-stuff');
  }
  public function show_data()
  {
    if ($this->input->is_ajax_request()) {
        $this->load->library('datatables_ssp');
        $table = 'tb_left_stuff';
        $primaryKey = 'id_left_stuff';
        $columns = array(
            array('db' => 'stuff_name', 'dt' => 'stuff_name'),
            array('db' => 'location', 'dt' => 'location'),
            array('db' => 'posted_at', 'dt' => 'posted_at'),
            array('db' => 'status', 'dt' => 'status'),
            array(
                'db' => 'id_left_stuff',
                'dt' => 'tools',
                'formatter' => function($a) {
                    return '<button type="button" class="btn btn-sm" onclick="edit(' . $a .  ')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                            <button type="button" class="btn btn-sm" onclick="del(' . $a .  ')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>';
                }
            ),
        );
        $sql_details = array(
            'user' => 'root',
            'pass' => 'root',
            'db' => 'db_ilab',
            'host' => 'localhost'
        );
        echo json_encode(
                Datatables_ssp::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }
    else {
      redirect(site_url('left-stuff/show'));
    }
  }

  public function add()
  {
    if ($this->input->is_ajax_request()) {
       if ($this->validate($this->input->post() == TRUE)) {
          $this->load->helper('date');
          $data['stuff_name'] = ucwords($this->filter($this->input->post('stuff_name')));
          $data['location'] = ucwords($this->filter($this->input->post('location')));
          $data['who_posted'] = ucwords($this->filter($this->input->post('who_posted')));
          $data['etc'] = ucwords($this->filter($this->input->post('etc')));
          $data['posted_at'] = mdate('%Y-%m-%d %H:%i:%s', time());
          $data['status'] = '<label class="text-danger">Have Not Taken</label>';
          echo $this->LeftStuffModel->add($data);
       }
    }
  }
  public function edit()
  {
    if ($this->input->is_ajax_request()) {
      echo json_encode($this->LeftStuffModel->edit($this->input->post('id')));
    }
  }
  public function update()
  {
    if ($this->input->is_ajax_request()) {
      if ($this->validate($this->input->post() == TRUE)) {
        $data = array();
        $data['id_left_stuff'] = $this->filter($this->input->post('id_left_stuff'));
        $data['stuff_name'] = ucwords($this->filter($this->input->post('stuff_name')));
        $data['location'] = ucwords($this->filter($this->input->post('location')));
        $data['who_posted'] = ucwords($this->filter($this->input->post('who_posted')));
        $data['etc'] = ucwords($this->filter($this->input->post('etc')));
        foreach ($this->LeftStuffModel->check_status($data['id_left_stuff']) as $status) {  //logic in >< database
          if ($this->input->post('status') == "Taken" && $status->status == '<label class="text-danger">Have Not Taken</label>') {
            $data['status'] = '<label class="text-success">Taken</label>';
            $this->load->helper('date');
            $data['taken_at'] = mdate('%Y-%m-%d %H:%i:%s', time());
            $data['who_taken'] = ucwords($this->filter($this->input->post('who_taken')));
          }
          elseif ($this->input->post('status') == "Have Not Taken" && $status->status == '<label class="text-success">Taken</label>') {
            $data['status'] = '<label class="text-danger">Have Not Taken</label>';
            $data['taken_at'] = "0000-00-00 00:00:00";
            $data['who_taken'] = "";
          }
          elseif ($this->input->post('status') == "Taken" && $status->status == '<label class="text-success">Taken</label>') {
            $data['who_taken'] = ucwords($this->filter($this->input->post('who_taken')));
          }
        }
        echo $this->LeftStuffModel->update($data);
      }
      else {
        echo FALSE;
      }
    }
  }
  public function trash()
  {
    if ($this->input->is_ajax_request()) {
        $this->LeftStuffModel->trash($this->input->post('id_trash'));
    }
  }
  public function count_stuff()
  {
    if ($this->input->is_ajax_request()) {
       echo json_encode($this->LeftStuffModel->count_stuff());
     }
  }
  private function validate($data)
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_left_stuff','id_left_stuff','trim|integer');
    $this->form_validation->set_rules('stuff_name','stuff_name','required|trim|max_length[255]');
    $this->form_validation->set_rules('location','location','required|trim|max_length[255]|alpha_numeric_spaces');
    $this->form_validation->set_rules('who_posted','who_posted','trim|max_length[255]');
    $this->form_validation->set_rules('status','status','trim|max_length[255]');
    $this->form_validation->set_rules('who_taken','who_taken','trim|max_length[255]');
    $this->form_validation->set_rules('etc','etc','trim|max_length[255]');
    return $this->form_validation->run();
  }
  private function filter($data)
  {
    return $this->security->xss_clean(html_escape($data));
  }
}
?>
