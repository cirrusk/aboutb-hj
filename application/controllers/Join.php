<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Join extends CI_Controller {

	// 회원가입 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/join');
		$this->load->view('template/footer');
	}

}
