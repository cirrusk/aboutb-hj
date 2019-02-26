<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Myinfo extends CI_Controller {

	// 내정보관리
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/myinfo');
		$this->load->view('template/footer');
	}

}
