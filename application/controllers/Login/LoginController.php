<?php /**
 *
 */
class LoginController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Login/LoginModel');
  }
  public function index()
  {
    echo "string";
  }
}
?>
