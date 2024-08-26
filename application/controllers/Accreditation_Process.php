<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accreditation_Process extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('acc_pro');
		$this->load->view('footer');
	}
}