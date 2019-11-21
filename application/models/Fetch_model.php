<?php
	class Fetch_model extends CI_Model{
		function __construct(){
			$this->load->database();

		}

		function ind_data($id){

			$this->db->select('*');
			$this->db->from('individual');
			$this->db->where('email',$id);
			$result=$this->db->get();
			return $result;
		}

		function busi_data($id){

			$this->db->select('*');
			$this->db->from('business');
			$this->db->where('email',$id);
			$result=$this->db->get();
			return $result;
		}

		function ag_data($id){

			$this->db->select('*');
			$this->db->from('agent');
			$this->db->where('email',$id);
			$result=$this->db->get();
			return $result;
		}

		function login($uid,$password){

			$this->db->select('*');
			$this->db->where('uid',$uid);
			$this->db->where('password',$password);
			$result = $this->db->get('users');
			return $result;
  }


}

	
	