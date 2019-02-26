<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/*
		Search Controller
	*/

		class Search extends CI_Controller {

			function __construct() {
				parent::__construct();
			}

			public function index()
			{
				$query = array();
				// 용도 카테고리 검색 필터
				$apt = $this->input->get('apt',true);
				$dandok = $this->input->get('dandok',true);
				$dagagu = $this->input->get('dagagu',true);
				$dasedae = $this->input->get('dasedae',true);
				$geunlin_jutaek = $this->input->get('geunlin_jutaek',true);
				$offijugeo = $this->input->get('offijugeo',true);

				if($apt == 'on'){
					$query['or']['mul_use_type'] = '아파트';
				}
				if($dandok == 'on'){
					$query['or']['mul_use_type'] = '단독주택';
				}
				if($dagagu == 'on'){
					$query['or']['mul_use_type'] = '다가구';
				}
				if($dasedae == 'on'){
					$query['or']['mul_use_type'] = '다세대';
				}
				if($geunlin_jutaek == 'on'){
					$query['or']['mul_use_type'] = '근린주택';
				}
				if($offijugeo == 'on'){
					$query['or']['mul_use_type'] = '오피스텔';
				}

				// 법원 검색 필터
				$query['jiwon_code'] = $this->input->get('bubwonSel', true);

				$data['result'] = $this->common_m->select('mul_basic', $query);

				$this->load->library('form_validation');
				$this->form_validation->run();

				$this->load->view('template/head');
				$this->load->view('template/top');
				$this->load->view('page/search/list',$data);
				$this->load->view('template/footer');
			}

			
		}