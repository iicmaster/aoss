<?php

class Member_model extends Model 
{
	var $fields = array();
	var $table;
	
	function __construct()
	{
		parent::Model();   
		
		$this->fields['id'] = 'id_member';
		$this->fields['username'] = 'id_member';
		$this->fields['password'] = 'password';
		$this->table = 'member';
	}
	
	function validate()
	{
		$this->db->where($this->fields['username'], $this->input->post('username'));
		$this->db->where($this->fields['password'], $this->input->post('password'));
		$query = $this->db->get($this->table);
		$validation = ($query->num_rows == 1) ? TRUE : FALSE;
		
		return $validation;
	}
	
	/*function create_member()
	{
		$new_member_insert_data = array(
			'first_name' 	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),			
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password')						
		);
		
		$insert = $this->db->insert($this->table, $new_member_insert_data);
		return $insert;
	}*/
	
	function get_detail($id=NULL)  
	{  
		if($id != NULL)  
		{  
			$this->db->where($this->fields['id'], $id); 
			$query = $this->db->get($this->table);
			
			return $query->row_array();  
		} 
		else 
		{ 
			return FALSE;  
		} 
	}
	
	function get_theme($id=NULL)
	{
		$this->db->select('content_theme.name as name, member.theme_color as color');
		$this->db->from('member');
		$this->db->join('content_theme', 'member.id_theme = content_theme.id');
		$this->db->where('member.id_member', $id);
		$query = $this->db->get();
		
		$data = $query->row_array();
		
		$theme['name'] = $data['name'];
		$theme['color'] = $data['color'];
		
		return $theme;
	}
}

/* End of file member_model.php */
/* Location: application/modules/member/models/member_model.php */