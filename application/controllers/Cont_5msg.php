<?php
	class Cont_5msg extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Post_model');
		}

		public function contact(){

			$this->form_validation->set_rules('fname','Fname','required');
			$this->form_validation->set_rules('lname','Lname','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('sub','subject');
			$this->form_validation->set_rules('msg','msg');

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/5msg');
				$this->load->view('templates/footer');

			}
			else{
				$data=array(
					'Fname'=>$this->input->post('fname'),
					'Lname'=>$this->input->post('lname'),
					'email'=>$this->input->post('email'),
					'subject'=>$this->input->post('sub'),
					'msg'=>$this->input->post('msg')
				);

				$this->Post_model->create_msg($data);
				$this->contact();
			}

		}
	}