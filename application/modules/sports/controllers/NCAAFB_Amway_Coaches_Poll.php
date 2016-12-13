<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NCAAFB_Amway_Coaches_Poll extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/ncaafb/amway_coaches_poll_view');
	}
}