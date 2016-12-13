<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Entrance extends MY_Controller
{
 
  function __construct()
  {
    parent::__construct();
    
    // $this->load->library('session');
    
  }
 
  public function index()
  {
    //$this->load->view('admin/login_view');
    redirect('login');
  }

  
  
}