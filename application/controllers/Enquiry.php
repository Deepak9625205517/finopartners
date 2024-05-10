<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	
	public function show_leadform()
	{
		$this->load->view('frontend/lead_form');
	}

	public function addnewlead()
	{
		
	}
}
