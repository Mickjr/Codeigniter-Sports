<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NFL_Depthchart extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/nfl/depthchart_view');
	}
}