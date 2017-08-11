<?php
class user extends CI_Controller {

	public function index(){
		$this->load->view('index_view');
	}

	public function checklogin(){
		$this->form_validation->set_rules('txtUsername', 'Username', 'required|trim');
		$this->form_validation->set_rules('txtPassword', 'Password', 'required|trim');
		if($this->form_validation->run()  ==  false){
			$data=array(
					'errors' => validation_errors()
				);
			$this->session->set_flashdata($data);
			redirect('user');
		}
		else{
			$username=$this->input->post('txtUsername');
			$password=$this->input->post('txtPassword');
			//echo $username."<br/>";
			//echo $password;
			$result=$this->user_model->user_login($username,$password);
			if($result){
				$sessionData=array(
					'id'=>$result,
					'userid'=>$username,
					'logged_in'=>true
					);
				$this->session->set_userdata($sessionData);
				$this->user_model->changeOnlineStatus($username,'1');
				redirect('home/index');
			}
			else{
				$this->session->set_flashdata('login_error','<strong>Warning!</strong> Better check yourself, youre not looking too good.');
				redirect('user');
			}

		}
	}

	public function logout(){
		$username=$this->session->userdata('userid');
		$this->user_model->changeOnlineStatus($username,'0');
		$this->session->sess_destroy();
		redirect('user');
	}

	// public function dashbord(){
	// 	if($this->session->userdata('logged_in')){
	// 		$data['main_view']='User/index_view';
	// 		$this->load->view('layout/main',$data);	
	// 	}
	// 	else{
	// 		redirect('user');
	// 	}
		
	// }
}
?>