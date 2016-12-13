<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NCAAFB_College_Playoff_Rankings extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$this->render('sports/ncaafb/college_playoff_rankings_view');
	}
}