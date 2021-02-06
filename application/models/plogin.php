<?php 

class Plogin extends CI_Model{
	public function get_login(){
		if(empty($this->session->userdata('name'))){
			redirect('auth');
		}
	}

	public function get_admin(){
		if($this->session->userdata('role_id') != 1){
			if(empty($this->session->userdata('name'))){
				redirect('auth');
			}else{
				redirect('user');
			}
		}
	}
	
}