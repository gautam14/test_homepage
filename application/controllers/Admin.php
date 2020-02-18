<?php 

class Admin extends CI_Controller {

	public function index(){
		$this->load->view('template/dashboard/header');
		$this->load->view('template/dashboard/sidebar');
		$this->load->view('admin');
		$this->load->view('template/dashboard/footer');
		
	}
	public function edit_homepage(){
		$this->load->view('template/dashboard/header');
		$this->load->view('template/dashboard/sidebar');
		$this->load->view('template/dashboard/pages/edit_homepage');
		$this->load->view('template/dashboard/footer');
	}
}

?>