<?php
	class Cont_delete extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Update_model');
			
		}

		function del(){
			$this->form_validation->set_rules('eventid','E_id','required');
			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/delete');
				$this->load->view('templates/footer');

			}
			else{

				$id = $this->input->post('eventid');
				$this->Update_model->del($id);
				$this->del();
			}
		}

	}