<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Terms_of_service extends CI_Controller {

	// 서비스 이용약관
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/terms_of_service');
		$this->load->view('template/footer');
	}

}
