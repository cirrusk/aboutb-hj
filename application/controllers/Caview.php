<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   /*
      Search Controller
   */

      class Caview extends CI_Controller {

         function __construct() {
            parent::__construct();
         }

         public function index()
         {

            $query = array();
            $query['case_mul_code'] = $this->input->get('case_mul_code', true);
            $data['result'] = $this->common_m->select('apple2', $query);


            $this->load->library('form_validation');
            $this->form_validation->run();
            $this->load->view('template/head');
            $this->load->view('page/caview/ca_view',$data);

         }
      }