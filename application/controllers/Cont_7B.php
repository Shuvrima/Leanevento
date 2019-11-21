<?php
	class Cont_7B extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Post_model');
		}

		public function busi_reg(){

			$this->form_validation->set_rules('firstname','name','required');
			$this->form_validation->set_rules('tic','tic%id');
			$this->form_validation->set_rules('email1','email','required');
			$this->form_validation->set_rules('password1','password','required');
			$this->form_validation->set_rules('phone','phone');
			$this->form_validation->set_rules('address','address','required');
			$this->form_validation->set_rules('city1','city','required');
			$this->form_validation->set_rules('state1','state','required');
			$this->form_validation->set_rules('zip1','zip','required');

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/7signupB');
				$this->load->view('templates/footer');

			}
			else{

				$role = '3';
				$data=array(
					'name'=>$this->input->post('firstname'),
					'tic%id'=>$this->input->post('tic'),
					'email'=>$this->input->post('email1'),
					'password'=>$this->input->post('password1'),
					'address'=>$this->input->post('address'),
					'city'=>$this->input->post('city1'),
					'state'=>$this->input->post('state1'),
					'zip'=>$this->input->post('zip1'),
					
				);

				$d=array(
					'uid'=>$this->input->post('email1'),
					'password'=>$this->input->post('password1'),
					'role'=> $role
				);

				$this->Post_model->create_busi($data);
				$this->Post_model->create_busi2($d);
				$this->busi_reg();
			}

		}
	}