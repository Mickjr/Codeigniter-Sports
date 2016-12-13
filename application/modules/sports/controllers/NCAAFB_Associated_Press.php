<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NCAAFB_Associated_Press extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/ncaafb/associated_press_view');
	}
}