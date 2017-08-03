<?php /**
 *
 */
class LeftStuffModel extends CI_Model
{
  private $tools = '<button type="button" class="btn btn-sm" onclick="edit($1)"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
                    <button type="button" class="btn btn-sm" onclick="del($1)"><span class="glyphicon glyphicon-trash" aria-hidden="true"></button>
                    ';
  function show_data()
  {
    $this->datatables->select('id_left_stuff,stuff_name,location,posted_at,status');
    $this->datatables->from('tb_left_stuff');
    $this->datatables->add_column('tools', $this->tools, 'id_left_stuff');
    return $this->datatables->generate();
  }
  public function trash($id)
  {
    $this->db->where('id_left_stuff', $id);
    return $this->db->delete('tb_left_stuff');
  }
  public function add($data)
  {
    return $this->db->insert('tb_left_stuff',$data);
  }
  public function edit($id)
  {
    $this->db->select('id_left_stuff,stuff_name,location,posted_at,who_posted,taken_at,who_taken,status,etc');
    $this->db->where('id_left_stuff', $id);
    return $this->db->get('tb_left_stuff')->row();
  }
  public function update($data)
  {
    $this->db->where('id_left_stuff', $data['id_left_stuff']);
    return $this->db->update('tb_left_stuff', $data);
  }
  public function check_status($id)
  {
    $this->db->select('status');
    $this->db->where('id_left_stuff', $id);
    return $this->db->get('tb_left_stuff')->result();
  }
  public function count_stuff()
  {
    $count["all"] = $this->db->count_all('tb_left_stuff');
    $this->db->where('status','<label class="text-success">Taken</label>');
    $count['taken'] = $this->db->count_all_results('tb_left_stuff');
    $this->db->where('status','<label class="text-danger">Have Not Taken</label>');
    $count['nottaken'] = $this->db->count_all_results('tb_left_stuff');
    return $count;
  }
}
?>
