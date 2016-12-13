<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Pagination extends Admin_Controller

{
	function __construct()
	{
		parent::__construct();
	}

	public function index($config) 
	{

		 /* This Application Must Be Used With BootStrap 3 *  */
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


        return $config;


	}

	public function table($page='',$page_number = 1)
    {
        $data['title']='Code Igniter / Bootstrap Table Demo';        
        $this->load->model('pagination_model');        
            
        //Pagination
        $this->load->library("pagination");
        //Set config options

        $config["per_page"] = 5;

        $config['use_page_numbers'] = TRUE;  

        $config['base_url'] = 'http://codeigniter-sports.local/sports/pagination/table';

        //Add bootstrap html to config
        $config = $this -> index($config);

        //fix request for records for page number use
        $page_number = intval(($page_number  == 1 || $page_number  == 0) ? 0 : ($page_number * $config['per_page']) - $config['per_page']);
        
        $config['total_rows'] = $this->pagination_model->count_results("data");

        $records = $this->pagination_model->get_results("data",$config["per_page"], $this->uri->segment(4));

        $this->pagination->initialize($config);                

        $data['pagination'] = $this->pagination->create_links();
        
        $this->load->library('table');

            $this->table->set_empty("");

            $this->table->set_heading(
                
                'ID',
                
                'Title',                

                'Content'
                
            );

            if(count($records)>0){
            
                foreach ($records as $record){

                    $this->table->add_row(
                    
                        array('data' => $record->id),
                        
                        array('data' => $record->title),           

                        array('data' => $record->content)                   

                    );

                }

                $tmpl = array ( 'table_open'  => '<table class="table table-striped table-bordered">' );

                $this->table->set_template($tmpl);

                $data['table'] = $this->table->generate();

            }    
    
        // $this->load->view('templates/demo_header', $data);
        $this->load->view('nba/pagination_view', $data);
    }
}	



