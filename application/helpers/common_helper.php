<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	function get_mul_biding_end_state($case_mul_code) {
		$CI =& get_instance();

		$query = array();
		$query['case_mul_code'] = $case_mul_code;
		$query['mul_biding_end_state'] = '유찰';
		$result = $CI->common_m->count('mul_biding_date', $query);

		if($result > 0) {
			return '유찰 ' . $result . '회';
		} else {
			return '신건';
		}
	}