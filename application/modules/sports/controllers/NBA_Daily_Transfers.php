<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NBA_Daily_Transfers extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nba/daily_transfers_view');
	}
}