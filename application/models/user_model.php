<?php 
/**
* 
*/
class user_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	function cek(){		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("select * from tb_user where username='$username' and password='$password'");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data_session)
 				 			
			$data_session = array(
				'username' => $username,
				'status' => "login",
				'level' => $data_session->level,
				'fullname' => $data_session->fullname
				);
 
			$this->session->set_userdata($data_session);
 			if($data_session["level"] == "factory"){
				redirect('c_factory/index');
			}elseif ($data_session["level"] == "purchasing") {
				redirect('c_purchasing/index');
			}
 
		}else{
			redirect("Login/index");
		}
	}	
	// function cek(){
	// 	//check login data with database
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$query = $this->db->query("select * from tb_user where username='$username' and password='$password'");
	// 		 if ($query->num_rows() > 0) {
	// 			foreach ($query->result() as $data) {
	// 				$data=array('LOGIN'=>TRUE,'NAMA'=>$data->fullname,'level'=>$data->level, 'id_user'=>$data->id_user);
	// 				$this->session->set_userdata($data);	
	// 				if($data["level"] == "factory"){
	// 				redirect('c_user/home_factory');
	// 				}elseif($data["level"] == "purchasing"){
	// 					redirect('c_user/home_purchasing');
	// 				}else{
	// 					redirect('welcome/index');
	// 				}
	// 			}
	// 		} else {
	// 			redirect('welcome/index');
	// 		}			
	// }

}
?>