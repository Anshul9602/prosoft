<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Copyright extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Header');
		$this->load->view('Copyright');
		$this->load->view('footer');
	}
}