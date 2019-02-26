<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Corpintro extends CI_Controller {

	// 회사소개 페이지
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/corpintro');
		$this->load->view('template/footer');
	}

}
