<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Learn extends CI_Controller {

	// 학습하기 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/learn');
		$this->load->view('template/footer');
	}

}
