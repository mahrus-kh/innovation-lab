<?php /**
 *
 */
class StudentCardModel extends CI_Model
{
  public $tools = '<div class="btn-group">
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-cog"></span>
          </button>
            <ul class="dropdown-menu pull-right ">
              <li><a href="#">Print Student Card</a></li>
              <li><a href="#">Taken Student Card</a></li>
              <li><a href="edit/$1">Details & Edit</a></li>
              <li onclick="mantap($1)"><a href="trash/$1">Delete !</a></li>
            </ul>
        </div>';
  public function show_data()
  {
    $this->datatables->select('id_status_card, tb_status_card.id_student as id_student, tb_student_card.name as name, status_printed, status_taken');
    $this->datatables->from('tb_status_card');
    $this->datatables->join('tb_student_card', 'tb_status_card.id_student = tb_student_card.id_student');
    $this->datatables->add_column('tools', $this->tools, 'id_status_card');
    return $this->datatables->generate();
  }
  public function conf_upload()
  {
    $conf['upload_path'] = './files/';
    $conf['allowed_types'] = 'jpg';
    $conf['max_size'] = 20000000;
    //$conf['max_width'] = 1024;
    //$conf['max_size'] = 768;
    $conf['file_name'] = "p" . $this->input->post('id_student');
    return $conf;
  }
  public function count_student_card()
  {
    $count['all'] = $this->db->count_all('tb_status_card');
    $this->db->where('status_printed', "Printed");
    $count['printed'] = $this->db->count_all_results('tb_status_card');
    $this->db->where('status_taken', "Taken");
    $count['taken'] = $this->db->count_all_results('tb_status_card');
    $count['not_printed'] = $count['all'] - $count['printed'];
    $count['have_not_taken'] = $count['all'] - $count['taken'];
    return $count;
  }
}
?>
