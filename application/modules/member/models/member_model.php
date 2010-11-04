<?php

class Member_model extends Model 
{
	var $fields = array();
	var $table;
	
	function __construct()
	{
		parent::Model();   
		
		$this->fields['id']				= 'id_member';
		$this->fields['username']		= 'id_member';
		$this->fields['password']		= 'password';
		$this->fields['first_name']		= 'first_name';
		$this->fields['last_name']		= 'last_name';
		$this->fields['sex']			= 'sex';
		$this->fields['birthday']		= 'birthday';
		$this->fields['email']			= 'email';
		$this->fields['detail'] 		= 'detail';
		$this->fields['domain'] 		= 'domain';
		$this->fields['date_register'] 	= 'date_register';
		$this->fields['date_expire'] 	= 'date_expire';
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
	
	function create_member()
	{
		$new_member_insert_data = array(
			'id_member'		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password'),
			'first_name'	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'sex' 			=> $this->input->post('sex'),
			'birthday' 		=> $this->input->post('birthday'),	
			'email' 		=> $this->input->post('email'),			
			'detail' 		=> $this->input->post('detail'),
			'domain' 		=> $this->input->post('domain'),
			'date_register' => $this->input->post('date_register')						
		);
		
		$insert = $this->db->insert($this->table, $new_member_insert_data);
		
		return $insert;
	}
	
	function update_member($id=NULL)
	{
		if($id != NULL)
		{
			$data = array(
				'password' 		=> $this->input->post('password'),
				'first_name'	=> $this->input->post('first_name'),
				'last_name' 	=> $this->input->post('last_name'),
				'sex' 			=> $this->input->post('sex'),
				'birthday' 		=> $this->input->post('birthday'),	
				'email' 		=> $this->input->post('email'),			
				'detail' 		=> $this->input->post('detail'),
				'domain' 		=> $this->input->post('domain')
			);
			
			$this->db->where($this->fields['id'], $id);
			$update = $this->db->update($this->table, $data);
			
			return $update;
		}
		else
		{
			return FALSE;	
		}
	}
	
	function delete_member($id=NULL)
	{
		if($id != NULL)
		{ 
			$this->db->where($this->fields['id'], $id);
			$delete = $this->db->delete($this->table);
			
			return $delete;
		}
		else
		{
			return FALSE;	
		}
	}
	
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
	
	function post_message()
	{
		$data = array(
				'id_member'	=> 595401,
				'name'		=> $this->input->post('name'),
				'tel' 		=> $this->input->post('tel'),
				'email' 		=> $this->input->post('email'),
				'message' 	=> $this->input->post('message'),	
				'date_add' 	=> date('Y-m-d H:i:s')			
		);
			
		$query = $this->db->insert('member_contact_message', $data);
		
		return $query;
	}
}

/* End of file member_model.php */
/* Location: application/modules/member/models/member_model.php */