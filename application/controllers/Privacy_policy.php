<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Privacy_policy extends CI_Controller {

	// 개인정보 취급방침 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/privacy_policy');
		$this->load->view('template/footer');
	}

}
