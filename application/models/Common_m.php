<?php
class Common_m extends CI_Model {
	function select($table, $query = array(), $limit = null, $offset = null) {
		foreach ($query as $key => $value) {
			if ($key == 'like') {
				foreach ($value as $a => $b) {
					$this->db->like(array($a => $b));
				}
			} else if ($key == 'or_like') {
				$this->db->group_start();
				foreach ($value as $a => $b) {
					$this->db->or_like(array($a => $b));
				}
				$this->db->group_end();
			} else if ($key == 'not') {
				foreach ($value as $a => $b) {
					$this->db->where_not_in($a, $b);	
				}
			} else if ($key == 'in') {
				foreach ($value as $a => $b) {
					$this->db->where_in($a, $b);
				}
			} else if ($key == 'join') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b);
				}
			} else if ($key == 'join_left') {
				foreach ($value as $a => $b) {
					$this->db->join($a, $b, 'left');
				}
			} else if ($key == 'group_by') {
				foreach ($value as $a => $b) {
					$this->db->group_by($b);
				}
			} else if ($key == 'or') {
				$this->db->or_group_start();
				foreach ($value as $a => $b) {
					$this->db->or_where($a, $b);
				}
				$this->db->group_end();
			} else if ($key == 'sort') {
				foreach ($value as $a => $b) {
					$this->db->order_by($a, $b, false);
				}
			} else if ($key == 'select') {
				foreach ($value as $a => $b) {
					$this->db->select($b);
				}
			} else {
				if(isset($key) && isset($value)) {
					$this->db->where(array($key => $value));	
				}
			}
		}
		$result = $this->db->get($table, $limit, $offset);
		return $result->result();
	}

	function count($table, $query = array()) {
		foreach ($query as $key => $value) {
			if ($key == 'like') {
				foreach ($value as $a => $b) {
					$this->db->like(array($a => $b));
				}
			} else if ($key == 'or_like') {
				$this->db->group_start();
				foreach ($value as $a => $b) {
					$this->db->or_like(array($a => $b));
				}
				$this->db->group_end();
			} else if ($key == 'not') {
				foreach ($value as $a => $b) {
					$this->db->where_not_in($a, $b);	
				}
			} else if ($key == 'in') {
				foreach ($value as $a => $b) {
					$this->db->where_in($a, $b);
				}
			} else if ($key == 'group_by') {
				foreach ($value as $a => $b) {
					$this->db->group_by($b);
				}
			} else if ($key == 'or') {
				$this->db->or_group_start();
				foreach ($value as $a => $b) {
					$this->db->or_where($a, $b);
				}
				$this->db->group_end();
			} else if ($key == 'sort') {
				foreach ($value as $a => $b) {
					$this->db->order_by($a, $b, false);
				}
			} else {
				if(isset($key) && isset($value)) {
					$this->db->where(array($key => $value));	
				}
			}
		}
		
		$result = $this->db->count_all_results($table);
		error_log($this->db->last_query());
		return $result;
	}

	function create($table, $query = array(), $escape = NULL) {
		if(!isset($query['set'])) {
			return 0;
		}
		foreach ($query['set'] as $key => $value) {
			if(isset($value)) {
				$this->db->set($key, $value, $escape);
			}
		}
		$this->db->insert($table);
		return $this->db->insert_id();
	}

	function update($table, $query = array(), $escape = NULL) {
		if(!isset($query['where']) || !isset($query['set'])) {
			return 0;
		}
		foreach ($query['where'] as $key => $value) {
			if(isset($value)) {
				$this->db->where($key, $value);
			}
		}
		foreach ($query['set'] as $key => $value) {
			if(isset($value)) {
				$this->db->set($key, $value, $escape);
			}
		}
		$this->db->update($table);
		return $this->db->affected_rows();
	}
	
	function delete($table, $query) {
		if(!isset($query['where'])) {
			return 0;
		}
		foreach ($query['where'] as $key => $value) {
			$this->db->where($key, $value);
		}
			
		$this->db->delete($table);
		return $this->db->affected_rows();
	}
}


