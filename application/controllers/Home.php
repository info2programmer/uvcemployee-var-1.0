<?php
class home extends CI_Controller{ 
	public function index(){
		if($this->session->userdata('logged_in'))
		{
			redirect('home/dashbord');
		}
		else{
			redirect('user');
		}
	}
	public function dashbord(){
		if($this->session->userdata('logged_in')){
			$UserId=$this->session->userdata('userid');
			//echo "<script>alert('".$UserId."');</script>";
			//$result=$this->user_model->getUserDetails($UserId);
			//$data['main_view']='User/index_view';
			$data=array(
				'result'=>$this->user_model->getUserDetails($UserId),
				'postvar' => $this->user_model->getAllPost(),
				'main_view' => 'User/index_view'
				);
			$this->load->view('layout/main',$data);	
		}
		else{
			redirect('user');
		}
	}

	public function attendance(){
		if($this->session->userdata('logged_in')){
			$UserId=$this->session->userdata('userid');
			$data=array(
				'result'=>$this->user_model->getUserDetails($UserId),
				'main_view' => 'User/attendance_view'
				);
			$this->load->view('layout/main',$data);	
		}
		else{
			redirect('user');
		}
	}

	public function startoffice(){
		if($this->session->userdata('logged_in')){
			$this->user_model->startofficetime();
			$data=array(
				'AttendanceMsg' => " <div class='row text-center'>
				<div class='col-sm-12 alert alert-success'>
					<strong>Success!</strong> Your Attendance is Registered.
				</div>
				<div class='col-sm-12 alert alert-warning'>
					<strong>Note : </strong> Kindly Click on 'End Office Timing' Button Before Leaveing Office/Log Out Portal
				</div>
			</div>"
			);
			$this->session->set_flashdata($data);
			redirect('home/attendance');
		}
		else{
			redirect('user');
		}
	}


	public function endoffice()
	{
		if($this->session->userdata('logged_in')){
			$this->user_model->endofficetime();
			$data=array(
				'AttendanceMsg' => "<div class='col-sm-12'>
				<div class='row text-center'>
					<div class='alert alert-success'>
						<strong>Bye!</strong> Good Night.
					</div>
				</div>
			</div>"
			);
			$this->session->set_flashdata($data);
			redirect('home/attendance');
		}
		else{
			redirect('user');
		}	
	}


	public function viewattendance(){
		if($this->session->userdata('logged_in')){
			$data=array(
				'result'=>$this->user_model->getAttendanceList(),
				'main_view' => 'User/viewattendance_view'
				);
			$this->load->view('layout/main',$data);
		}
		else{
			redirect('user');
		}
	}

	public function messagetoadmin(){
		if($this->session->userdata('logged_in')){
			$UserId=$this->session->userdata('userid');
			$data=array(
				'result' => $this->user_model->getUserDetails($UserId),
				'main_view' => 'User/messagetoadmin_view'
				);
			$this->load->view('layout/main',$data);
		}
		else{
			redirect('user');
		}
	}

	public function msgtoadmin(){
		if($this->session->userdata('logged_in')){
			$this->form_validation->set_rules('txtMessage','Message','required|trim');
			if($this->form_validation->run()  ==  false){
				$data=array(
					'validationerror' => validation_errors()
					);
				$this->session->set_flashdata($data);
				redirect('home/messagetoadmin');
			}
			else{
				$messageBy=$this->input->post('txtMessageBy');
				$messageBody=$this->input->post('txtMessage');
				$this->user_model->sendMessagetoAdmin($messageBody,$messageBy);
				$data=array(
					'SuccessMsg' => "<div class='col-sm-12'>
					<div class='row text-center'>
						<div class='alert alert-success'>
							<strong>Thank You!</strong> Admin Will Contact You Soon.
						</div>
					</div>
				</div>"
				);
				$this->session->set_flashdata($data);
				redirect('home/messagetoadmin');
			}
		}
		else{
			redirect('user');
		}
	}

	public function uploadGallery(){
		if($this->session->userdata('logged_in')){
			$rand="./assets/uploads/gallery/".md5(rand()).".jpg";
			$UserId=$this->session->userdata('userid');
			if(is_uploaded_file($_FILES['fileGallery']['tmp_name']))
			{
				move_uploaded_file($_FILES['fileGallery']['tmp_name'], $rand);
			}
			$this->user_model->uploadGallery($rand,$UserId);
			$data=array(
				'msg' => 'Photo Uploaded Sucessfully'
				);
			$this->session->set_flashdata($data);
			redirect('home/dashbord');
		}
		else{
			redirect('user');
		}
	}

	public function dopost(){
		if($this->session->userdata('logged_in')){	
			$txtBox=$this->input->post('txtPostText');
			$postBy=$this->input->post('txtName');
			$UserId=$this->session->userdata('userid');
			if(is_uploaded_file($_FILES['uploadImage']['tmp_name']) && strlen($txtBox)>0){
				$filePath="./assets/uploads/post/".md5(rand()).".jpg";
				move_uploaded_file($_FILES['uploadImage']['tmp_name'], $filePath);
				$filePath='../'.$filePath;
				$this->user_model->createpost($filePath,$txtBox,$postBy,$UserId);
			}
			else{
				if(is_uploaded_file($_FILES['uploadImage']['tmp_name']))
				{
					$filePath="./assets/uploads/post/".md5(rand()).".jpg";
					move_uploaded_file($_FILES['uploadImage']['tmp_name'], $filePath);
					$filePath='../'.$filePath;
					$this->user_model->createpost($filePath,null,$postBy,$UserId);
				}	
				else{
					$this->user_model->createpost(null,$txtBox,$postBy,$UserId);
				}
			}

			$this->session->set_flashdata('postmsg','Post Updated Sucessfully');
			redirect('home/dashbord');
		}
		else{
			redirect('user');
		}
	}

	public function gallery(){
		if($this->session->userdata('logged_in')){	
			$data=array(
				'result' => $this->user_model->getGallery(),
				'main_view' => 'User/gallery_view'
			);
			$this->load->view('layout/main',$data);
		}
		else{
			redirect('user');
		}
	}

	public function chatbox(){
		if($this->session->userdata('logged_in')){	
			//$to_id=$this->input->get('id', TRUE);
			if($this->input->get('id', TRUE)!=null){
				$to_id=$this->input->get('id', TRUE);

				$data=array(
				'result' => $this->user_model->getGallery(),
				'friend' => $this->user_model->friendsdetails(),
				'conversession' => $this->user_model->getconversation($to_id),
				'main_view' => 'User/chat_view'
				);
			}
			else{
				$data=array(
				'result' => $this->user_model->getGallery(),
				'friend' => $this->user_model->friendsdetails(),
				'main_view' => 'User/chat_view'
				);
			}
			$this->load->view('layout/main',$data);
		}
		else{
			redirect('user');
		}
	}

	public function sendmessage(){
		if($this->session->userdata('logged_in')){

			//This Section For Validation
			$this->form_validation->set_rules('txtMessage','Message','required|trim');
			if($this->form_validation->run()  ==  false){//Check Validation Here
				$data=array(
					'errsendmessage' => validation_errors()
					);
				$this->session->set_flashdata($data);
				$url="home/chatbox/?id=".$this->input->post('id')."&name=".$this->input->post('name')."&image=".$this->input->post('image');
				redirect($url);
			}
			else{
				//if validation sucessfull
				$url="home/chatbox/?id=".$this->input->post('id')."&name=".$this->input->post('name')."&image=".$this->input->post('image');
				$this->user_model->sendPmessage($this->input->post('id'),$this->input->post('txtMessage'));
				redirect($url);
			}
		}
		else{
			redirect('user');
		}
	}

	// 	public function chatbox($to_id){
	// 	if($this->session->userdata('logged_in')){
	// 		$to_id
	// 		$data=array(
	// 			'result' => $this->user_model->getGallery(),
	// 			'friend' => $this->user_model->friendsdetails(),
	// 			'conversession' => $this->user_model->getconversation($to_id);
	// 			'main_view' => 'User/chat_view'
	// 		);
	// 		$this->load->view('layout/main',$data);
	// 	}
	// 	else{
	// 		redirect('user');
	// 	}
	// }

}

?>