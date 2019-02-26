<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Helpcenter extends CI_Controller {

	// 고객센터 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/helpcenter');
		$this->load->view('template/footer');
	}

}
