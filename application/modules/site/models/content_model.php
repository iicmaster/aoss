<?php

class Content_model extends Model 
{
	
	
	function __construct()
	{
		parent::Model();   
	}
	
	function get_vdo($id=NULL)
	{
		$this->db->order_by('id');
		$query = $this->db->get('content_vdo');
		
		return $query;
	}
}

/* End of file content_model.php */
/* Location: application/modules/site/models/content_model.php */