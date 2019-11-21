<?php
	class Update_model extends CI_Model{
		function __construct(){
			$this->load->database();
		}
	
		function update_ind($id, $data){

			$this->db->set($data);
			$this->db->where('email', $id);
			$this->db->update('individual');

		}

		function update_ag($id, $data){

			$this->db->set($data);
			$this->db->where('email', $id);
			$this->db->update('agent');

		}

		function update_busi($id, $data){

			$this->db->set($data);
			$this->db->where('email', $id);
			$this->db->update('business');

		}

		function del($id){

			$this->db->where('E_id', $id);
			$this->db->delete('events');
		}

		function update_event($id,$data){

			$this->db->set($data);
			$this->db->where('E_id', $id);
			$this->db->update('events');

		}

	}

