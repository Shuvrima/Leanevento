<?php
	class Cont_eveup extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
    		$this->load->helper('form');
			$this->load->model('Update_model');
			
		}

		function update(){
			$this->form_validation->set_rules('ID','E_id','required');
			$this->form_validation->set_rules('ename','name','required');
			$this->form_validation->set_rules('place','place','required');
			$this->form_validation->set_rules('date1','date','required');
			$this->form_validation->set_rules('time1','from_t','required');
			$this->form_validation->set_rules('cost','cost','required');


			if($this->form_validation->run()===FALSE){
				$this->load->view('templates/header');
				$this->load->view('pages/eventupdate');
				$this->load->view('templates/footer');

			}
			else{

				$id = $this->input->post('ID');
				$data = array(

					'name'=>$this->input->post('ename'),
					'place'=>$this->input->post('place'),
					'date'=>$this->input->post('date1'),
					'from_t'=>$this->input->post('time1'),
					'cost'=>$this->input->post('cost'),

				);

				$this->Update_model->update_event($id,$data);
				$this->update();
			}
		}

	}