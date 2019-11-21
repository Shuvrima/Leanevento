

<?php
	class Post_model extends CI_Model{
		function __construct(){
			$this->load->database();
		}
		
		function create_msg($data){

			return $this->db->insert('msg',$data);
		}

		function create_user($data){

			return $this->db->insert('individual',$data);

		}

		function create_user2($d){

			return $this->db->insert('users',$d);
		}

		function create_agent($data){
			return $this->db->insert('agent',$data);

		}
		function create_agent2($d){
			return $this->db->insert('users',$d);

		}

		function create_busi($data){
			return $this->db->insert('business',$data);

		}
		function create_busi2($d){
			return $this->db->insert('users',$d);

		}

		function create_event($data){
			return $this->db->insert('events',$data);
		}
	}