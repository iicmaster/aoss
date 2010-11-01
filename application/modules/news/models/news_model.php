<?php

class News_model extends Model 
{
	var $fields = array();
	var $table;
	
	function __construct()
	{
		parent::Model();   
		
		$this->fields['id']			= 'id_news';
		$this->fields['type']		= 'type';
		$this->fields['topic']		= 'topic';
		$this->fields['detail']		= 'detail';
		$this->fields['date_add']	= 'date_add';
		$this->fields['date_edit']	= 'date_edit';
		$this->table = 'news';
	}	
	
	function create_news()
	{
		$data = array(
			'type'		=> $this->input->post('type'),
			'topic'		=> $this->input->post('topic'),
			'detail'	=> $this->input->post('detail'),
			'date_add'	=> $this->input->post('date')					
		);
		
		$query = $this->db->insert($this->table, $data);
		
		return $query;
	}
	
	function update_news($id=NULL)
	{
		if($id != NULL){
			$data = array(
				'topic'		=> $this->input->post('topic'),
				'detail'	=> $this->input->post('detail'),
				'date_edit'	=> $this->input->post('date')
			);
			
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->update($this->table, $data);
			
			return $query;
		}else{
			return FALSE;	
		}
	}
	
	function delete_news($id=NULL)
	{
		if($id != NULL){
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->delete($this->table);
			
			return $query;
		}else{
			return FALSE;	
		}
	}
	
	function get_news($id=NULL)
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

/* End of file news_model.php */
/* Location: application/modules/news/models/news_model.php */
