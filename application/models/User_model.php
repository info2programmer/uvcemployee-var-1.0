<?php
date_default_timezone_set('Asia/Kolkata');
class user_model extends CI_Model{

	// private function getUserIP()
	// {
	//     $ipaddress = '';
	//     if (isset($_SERVER['HTTP_CLIENT_IP']))
	//         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	//     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	//         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	//     else if(isset($_SERVER['HTTP_X_FORWARDED']))
	//         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	//     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	//         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	//     else if(isset($_SERVER['HTTP_FORWARDED']))
	//         $ipaddress = $_SERVER['HTTP_FORWARDED'];
	//     else if(isset($_SERVER['REMOTE_ADDR']))
	//         $ipaddress = $_SERVER['REMOTE_ADDR'];
	//     else
	//         $ipaddress = 'UNKNOWN';
	//     return $ipaddress;
	// }

	public function user_login($username,$password){
		$passwordMD5=md5($password);
		$this->db->where('emp_id',$username);
		$this->db->where('password',$passwordMD5);
		$result=$this->db->get('emp_login');

		if($result->num_rows()==1){
			// echo "<script>alert('".$result->row(0)->id."');</script>";
			return $result->row(0)->id;
		}
		else{
			return false;
		}
	}

	public function changeOnlineStatus($userName,$status){

		$this->db->set('isLogin',$status);
		$this->db->where('emp_id',$userName);
		$this->db->update('emp_details');

	}

	public function getUserDetails($id){
		$this->db->where('emp_id',$id);
		$query=$this->db->get('emp_details');
		return $query->result();
	}

	public function checkattendence(){
		$userID=$this->session->userdata('userid');
		$this->db->where('emp_id',$userID);
		$this->db->where('date',date("d/m/y"));
		$result=$this->db->get('emp_attendance');
		if($result->num_rows()>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function startofficetime(){
		$userID=$this->session->userdata('userid');
		$data=array(
			'emp_id' => $userID,
			'date' => date("d/m/y"),
			'starttime' => date("H:i:s"),
			'ip' => $this->input->ip_address()
			);
		$this->db->insert('emp_attendance',$data);
	}

	public function endofficetime(){
		$userID=$this->session->userdata('userid');
		$data=array(
			'endtime' => date("H:i:s")
			);
		$this->db->where('emp_id',$userID);
		$this->db->where('date',date("d/m/y"));
		$this->db->update('emp_attendance',$data);
	}

	public function getAttendanceList(){
		$userID=$this->session->userdata('userid');
		$this->db->where('emp_id',$userID);
		$this->db->order_by('id', 'DESC');
		$query=$this->db->get('emp_attendance');
		return $query->result();
	}

	public function sendMessagetoAdmin($message,$messageby){
		$data=array(
			'date' => date("d/m/y"),
			'time' => date("H:i:s"),
			'message_by' => $messageby,
			'message_content' => $message
		);
		$this->db->insert('tbl_messagetoadmin',$data);
	}

	public function uploadGallery($picurl,$empId){
		$data=array(
		   'post_by' => $empId,
		   'date' => date("d/m/y"),
		   'time' => date("H:i:s"),
		   'pic_path' => $picurl
		);

		$this->db->insert('emp_gallery',$data);
	}

	public function createpost($ImgLink,$PostText,$PostBy,$userId){
		$data=array(
		 'post_by'=> $userId,
		 'name' => $PostBy,
		 'post_date' => date("d/m/y"),
		 'post_time' => date("H:i:s"),
		 'post_text' => $PostText,
		 'post_image' => $ImgLink
		); 
		$this->db->insert('emp_post',$data);
	}

	public function getAllPost(){
		// $prev_date = date('d/m/y', strtotime(date("d/m/y") .' -1 day'));
		// $this->db->where('post_date <',date("d/m/y"));
		// $this->db->where('post_date >',$prev_date);
		$query=$this->db->get('emp_post');
		return $query->result();
	}

	public function getGallery(){
		$userID=$this->session->userdata('userid');
		$this->db->where('post_by',$userID);
		$query=$this->db->get('emp_gallery');
		return $query->result();
	}

	public function friendsdetails(){
		$userID=$this->session->userdata('userid');
		$this->db->where_not_in('emp_id',$userID);
		$query=$this->db->get('emp_details');
		return $query->result();
	}

	public function getconversation($to_id){
		$userid=$this->session->userdata('userid');
		//SELECT * FROM `emp_message` WHERE `to_id` IN ('UVC007','UVC001') AND `from_id` IN ('UVC001','UVC007')
		//$this->db->where('from_id',$userid);
		//$this->db->or_where('to_id',$userid);
		//$query=$this->db->get('emp_message');
		//return $query->result();
		$toid=array($userid,$to_id);
		$from_id=array($to_id,$userid);
		$this->db->where_in('to_id',$toid);
		$this->db->where_in('from_id',$from_id);
		$query=$this->db->get('emp_message');
		return $query->result();
	}

	//This Function Send Message 
	public function sendPmessage($to,$message){
		$userID=$this->session->userdata('userid');
		$data=array(
		 'to_id'=> $to,
		 'from_id' => $userID,
		 'time_sent' => date("d/m/y H:i:s"),
		 'message' => $message
		);
		$this->db->insert('emp_message',$data);
	}

}
?>
