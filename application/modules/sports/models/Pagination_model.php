<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_model extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}

	public function count_results($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	public function get_results($table,$limit=100,$start=0)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by('id', 'ASC');
		$this->db->limit($limit, $start);
		$query = $this->db->get();

		return $query->result();
	}
}