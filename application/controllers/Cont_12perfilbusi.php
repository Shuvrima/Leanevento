<?php
	class Cont_12perfilbusi extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Update_model');
		}

		public function busi_update(){

			$data['title'] = "enter contact info";
			$this->form_validation->set_rules('firstname','name','required');
			$this->form_validation->set_rules('email1','email','required');
			$this->form_validation->set_rules('uname','uname');
			$this->form_validation->set_rules('password1','password','required');
			$this->form_validation->set_rules('phone','phone');
			

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/12perfilbusi');
				$this->load->view('templates/footer');

			}
			else{

				$id = $this->input->post('email1'); 
				//print($id);
				$data = array(
					//'Fname'=>$this->input->post('firstname'),
					//'Lname'=>$this->input->post('lastname'),
					//'email'=>$this->input->post('email1'),
					'phone'=>$this->input->post('phone'),
					'password'=>$this->input->post('password1'),
					
				);

				$this->Update_model->update_busi($id, $data);
				$this->busi_fetch();
			}

		}


		function busi_fetch(){
				$id = $this->session->userdata;
				$myid=$id['log_in']['email'];
				//$id ='bh@bighit.com';
				$data['data']=$this->Fetch_model->busi_data($myid);
				$this->load->view('templates/header');
		        $this->load->view('pages/12perfilbusi',$data);
				$this->load->view('templates/footer');

		}
	}