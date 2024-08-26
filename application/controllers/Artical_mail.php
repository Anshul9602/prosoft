<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artical_mail extends CI_Controller
{


	public function index()
	{
		if (empty($_POST)) {
			redirect(base_url());
		}
		
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
		// die();
	
		$this->load->library('email');
	
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = '';
		$config['smtp_pass'] = 'ottxbxionpddrcmb';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not
	
		$this->email->initialize($config);
	
		$from = $_POST['email'];
		$to = '';
		$subject = 'Artical Mailbox';
		$message = 'Hello Team, <br /> You have a Artical application from VSC Portal. <br />';
		unset($_POST['g-recaptcha-response']);
	
		foreach ($_POST as $key => $value) {
			$message .= $key . '- ' . $value . '<br>';
		}
	
		// Add the file link to the message
		
	
		// Attach the file if it's uploaded
		if (!empty($file_path)) {
			$this->email->attach($file_path);
		}
	
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
	
		// Send the email
		if ($this->email->send()) {
			echo "Email sent successfully"; // For debugging
		} else {
			echo "Email sending failed"; // For debugging
		}
	
		redirect(base_url(''));
	}

	public function insert_data()
	{
		print_r($_POST);

		// $this->load->model('home');
		// $data['name'] =$this->input->post('name');

		// $data['mobile']=$this->input->post('mobile');
		// $data['email']=$this->input->post('email');
		// $data['district']=$this->input->post('district');
		// $data['assembly']=$this->input->post('assembly');
		// $data['facebook']=$this->input->post('facebook');
		// $data['twitter']=$this->input->post('twitter');
		// $data['instagram']=$this->input->post('instagram');

		// $this->home->insert_data($data); 
	}

}