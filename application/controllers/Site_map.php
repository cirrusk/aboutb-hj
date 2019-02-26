<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Site_map extends CI_Controller {

	// 서비스 전체보기 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/site_map');
		$this->load->view('template/footer');
	}

}
