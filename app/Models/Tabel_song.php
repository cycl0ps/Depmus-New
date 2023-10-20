<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tabel_song extends CI_Model {
	
	public function __construct() {
		parent::__construct();	
	}
	public function get($condition = FALSE, $sort = FALSE, $limit = FALSE, $select = FALSE, $groupby = FALSE, $having = FALSE) {
		if ($condition) $this->db->where($condition);
		if ($sort) 		$this->db->order_by($sort);
		if ($limit) 	$this->db->limit($limit);
		if ($select)	$this->db->select($select);
		if ($groupby) 	$this->db->group_by($groupby);
		if ($having) 	$this->db->having($having);
		$query = $this->db->get('song');
		$result = $query->result_array();
		
		return $result;
	}
	public function detail($condition) {
		$this->db->where($condition);
		$query = $this->db->get('song');
		$result = $query->row_array();
		return $result;
	}	
	public function tambah($data) {
		$this->db->insert('song', $data);
		return $this->db->affected_rows();
	}
	
	public function delete($id) {
		$this->db->delete('song', array('id' => $id));
		return $this->db->affected_rows();
	}
	
	public function update($data) {
		
		$this->db->where('id', $data['id']);
		$this->db->update('song', $data);
		return $this->db->affected_rows();
	}	
}
