<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Termsconditions extends CI_Controller {

	
	public function index()
	{
		$this->load->view('frontend/terms_and_conditions');
	}


}
