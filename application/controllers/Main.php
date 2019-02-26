<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Main Controller
	*/

class Main extends CI_Controller {


	// 홈 = 메인페이지
	public function index()
	{
		// $this->home();
		$result  = $this->db->get_where('case_basic');
		$data['result'] = $result->result();

		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/home', $data);
		$this->load->view('template/footer');
	}
}
