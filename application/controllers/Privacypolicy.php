<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacypolicy extends CI_Controller {

	
	public function index()
	{
		$this->load->view('frontend/privacy_policy');
	}


}
