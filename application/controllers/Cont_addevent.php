<?php
	class Cont_addevent extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Post_model');
		}

			function show(){
				$this->load->view('templates/header');
				$this->load->view('pages/18agevent');
				$this->load->view('templates/footer');
			}

			 function eve_reg(){

			$data['title'] = "enter contact info";
			$this->form_validation->set_rules('ename','name','required');
			$this->form_validation->set_rules('place','place','required');
			$this->form_validation->set_rules('date1','date','required');
			$this->form_validation->set_rules('time1','from_t','required');
			$this->form_validation->set_rules('cost','cost');
			$this->form_validation->set_rules('ano','A_id','required');
			

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/18agevent');
				$this->load->view('templates/footer');

			}
			else{
				$data=array(
					'name'=>$this->input->post('ename'),
					'place'=>$this->input->post('place'),
					'date'=>$this->input->post('date1'),
					'from_t'=>$this->input->post('time1'),
					'cost'=>$this->input->post('cost'),
					'A_id'=>$this->input->post('ano'),					
				);

				$this->Post_model->create_event($data);
				$this->show();
			}

		}
	}