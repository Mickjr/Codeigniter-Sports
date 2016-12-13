<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NFL_Weekly_Schedule extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nfl/weekly_schedule_view');
	}
	
}