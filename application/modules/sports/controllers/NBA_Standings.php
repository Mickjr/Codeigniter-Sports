<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NBA_Standings extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nba/standings_view');
	}
}