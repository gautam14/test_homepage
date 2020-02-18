<?php

class Home extends CI_Controller {
	
	public function index(){
		$this->load->view('template/frontend/header');
		$this->load->view('home');
		$this->load->view('template/frontend/footer');
		}
	
	}


?>
