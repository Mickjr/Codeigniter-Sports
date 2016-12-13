<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
* SENDS EMAIL WITH GMAIL
*/

class Email extends Admin_Controller 

{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index() 
	{
		$this->load->helper('form');
		$this->load->view('nba/email_view');
	}

	public function send_mail()
	{
		$from_email = "mantonhorton@gmail.com";
		$to_email = $this->input->post('email');


		//Load email library
		$this->load->library('email');

		$this->email->from($from_email, 'Manton Horton');
		$this->email->to($to_email);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');


		//Send email
		if($this->email->send())
		{
			echo 'Your email was sent!';
		}

		else
		{
			echo 'Your email was not sent!';
		}
	}
}

