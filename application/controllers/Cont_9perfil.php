<?php
	class Cont_9perfil extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Update_model');
			$this->load->model('Fetch_model');
		}

		public function ind_update(){

			$this->form_validation->set_rules('firstname','Fname','required');
			$this->form_validation->set_rules('lastname','Lname','required');
			$this->form_validation->set_rules('email1','email','required');
			$this->form_validation->set_rules('uname','uname');
			$this->form_validation->set_rules('password1','password','required');
			$this->form_validation->set_rules('phone','phone');
			

			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/9perfilind');
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

				$this->Update_model->update_ind($id, $data);
				$this->ind_fetch();
			}

		}

		function ind_fetch(){
				$id = $this->session->userdata;
				$myid=$id['log_in']['email'];
				//$id ='sd@gmail.com';
				$data['data']=$this->Fetch_model->ind_data($myid);
				$this->load->view('templates/header');
		        $this->load->view('pages/9perfilind',$data);
				$this->load->view('templates/footer');

		}





	}