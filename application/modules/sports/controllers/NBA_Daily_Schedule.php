<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NBA_Daily_Schedule extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nba/daily_schedule_view');
	}
}