<?php
	class Cont_login extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Fetch_model');
			$this->load->library('session');
			$this->load->helper('url');

		}

		function login(){
			$this->form_validation->set_rules('email1', 'uid', 'required');
			$this->form_validation->set_rules('password1', 'password', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header');
				$this->load->view('pages/6login');
				$this->load->view('templates/footer');
			}
			else{

				$uid    = 	$this->input->post('email1');
			    $password = $this->input->post('password1');
			    $validate = $this->Fetch_model->login($uid,$password);
			    var_dump($validate);

			    if($validate->num_rows() == 1){
			    	$data  = $validate->row_array();
			        //$data  = $validate->role;
			        //$name  = $data['user_name'];
			        //$email = $data['user_email'];
			        //$level = $data;
			        $level= $data['role'];
			        var_dump($level);
			        $sesdata = array(

			            'email'=>$uid,
			            'level'=> $level,
			            'logged_in' => TRUE
			        );
			        $this->session->set_userdata('log_in',$sesdata);
			        // login agent
			        if($level == '1'){
			            redirect('14homeagent');
			 
			        // login individual
			        }
			        elseif($level == '2'){
			            redirect('8eventind');
			 
			        // login business
			        }
			        else{
			            redirect('Cont_11event/busi_fetch_event');
			        }
			    }
			    else{
			       
			        $this->login();
			    }
			  
			}
		}



}