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
			'type'		=> 0,
			'topic'		=> $this->input->post('topic'),
			'detail'		=> $this->input->post('detail'),
			'date_add'	=> date('Y-m-d H:i:s')				
		);
		
		$query = $this->db->insert($this->table, $data);
		return $query;
	}
	
	function update_news($id=NULL)
	{
		if($id != NULL)
		{
			$data = array(
				'topic'		=> $this->input->post('topic'),
				'detail'		=> $this->input->post('detail'),
				'date_edit'	=> $this->input->post('date')
			);
			
			$this->db->where($this->fields['id'], $id);
			$query = $this->db->update($this->table, $data);
			
			return $query;
		}else{
			return FALSE;	
		}
	}
	
	function delete_news()
	{	
		$id = explode(',', $this->input->post('id'));
		
		if(count($id) > 1)
		{
			for($loop = 1;$loop <= count($id);$loop++)
			{
				$this->db->where($this->fields['id'], $id[$loop - 1]);
				$query = $this->db->delete($this->table);
			}
			
			return $this->get_news_json();
		}else{
			return FALSE;	
		}
	}
	
	function get_news()
	{
		//$this->db->order_by($this->fields['id'], 'asc');
		$data = $this->db->get($this->table);
		
		return $data;
	}
	
	function get_news_json()
	{
		$word			= $this->input->post('word');
		$search_by	= $this->input->post('search_by');
		$order_by	= $this->input->post('order_by');
		$option 		= $this->input->post('option'); 

		if($word != '' && $search_by != '')
		{
			$this->db->like($search_by, $word);
		}
		
		if($order_by != '')
		{
			$this->db->order_by($order_by, $option);
		}
		
		$query = $this->db->get($this->table);
		
		$data = array();
		
		foreach($query->result() as $row)
		{
			$sub_data = array(
									$row->id_news, 
									$row->topic, 
									$row->detail
							);
	
			array_push($data, $sub_data);	
		}
		
		$this->last_order_by = $order_by;
		
		return json_encode($data);
	}
}

/* End of file news_model.php */
/* Location: application/modules/news/models/news_model.php */
