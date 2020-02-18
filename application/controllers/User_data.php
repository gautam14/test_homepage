<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_data extends CI_Controller {
	
	public function index()
	{
		$this->load->library('user_agent');
		$this->load->view('welcome_message');
	}

	public function save_userinput()
	{
	  //code goes here
	  // for example: getting the post values of the form:
	  $form_data = $this->input->post();
	  // or just the username:
	  echo $username = $this->input->post("username");
	  echo $password = $this->input->post("password");
	  
	 echo $user_ip = getenv('REMOTE_ADDR');
	$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
	echo $country = $geo["geoplugin_countryName"];
	echo $city = $geo["geoplugin_city"];

	  // then do whatever you want with it :)

	}
	
}
