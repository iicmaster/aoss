<?php

class Event_model extends Model 
{
	var $fields = array();
	var $table;
	
	function __construct()
	{
		parent::Model();   
		
		$this->fields['id']				= 'id_event';
		$this->fields['topic']			= 'topic';
		$this->fields['description']	= 'description';
		$this->fields['contact']		= 'contact';
		$this->fields['place']			= 'place';
		$this->fields['date_start']		= 'date_start';
		$this->fields['date_end']		= 'date_end';
		$this->fields['date_add']		= 'date_add';
		$this->fields['date_edit']		= 'date_edit';
		$this->table = 'event';
	}	
	
	function create_event()
	{
		$data = array(
			'topic'			=> $this->input->post('topic'),
			'description'	=> $this->input->post('description'),
			'contact'		=> $this->input->post('contact'),
			'place'			=> $this->input->post('place'),
			'date_start'	=> $this->input->post('date_start'),
			'date_end'		=> $this->input->post('date_end'),
			'date_add'		=> $this->input->post('date_add')					
		);
		
		$query = $this->db->insert($this->table, $data);
		
		return $query;
	}
	
	function update_event($id=NULL)
	{
		if($id != NULL){
			$data = array(
				'topic'			=> $this->input->post('topic'),
				'description'	=> $this->input->post('description'),
				'contact'		=> $this->input->post('contact'),
				'place'			=> $this->input->post('place'),
				'date_start'	=> $this->input->post('date_start'),
				'date_end'		=> $this->input->post('date_end'),
				'date_edit'		=> $this->input->post('date_edit')					
			);
			
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->update($this->table, $data);
			
			return $query;
		}else{
			return FALSE;	
		}
	}
	
	function delete_event($id=NULL)
	{
		if($id != NULL){
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->delete($this->table);
		
			return $query;
		}else{
			return FALSE;	
		}
	}	
	
	function get_event($id=NULL)
	{
		if($id != NULL){
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->get($this->table);
			
			return $query;
		}else{
			return FALSE;	
		}
	}
}

/* End of file event_model.php */
/* Location: application/modules/event/models/event_model.php */
