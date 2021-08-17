<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function verify_login($username){
		$this->db->where('username', $username);
		// $query = $this->db->query('SELECT * FROM users 
		// 							INNER JOIN employees 
		// 							WHERE users.employee_id = employees.id AND username = "'.$username.'"'); 
		$query = $this->db->get('users'); 
		$res = $query->row();
		return $res;
	}

	public function count_req_orders(){
		// return $this->db->count_all_results('request_order');  // Produces an integer, like 25.
		// $this->db->select_max('ro_id');
		// $query = $this->db->get('request_order');
		// $this->db->from('request_order');
		 // $this->db->count_all_results();
		// $this->db->distinct();
		// $this->db->select_max('ro_id');
		// $this->db->select_max('order_id');
		// return $this->db->count_all_results('request_order');
		$query = $this->db->query('SELECT DISTINCT order_id FROM request_order');
		return $query->result();
	}
	
	public function get_inventory(){
		$this->db->order_by('id', 'desc');
		$q = $this->db->get('tbl_inventory');
		$res = $q->result();
		return $res;
	}
}

