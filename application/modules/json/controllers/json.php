<?php
class Json extends Controller 
{
	function __construct()
	{
		parent::Controller(); 
	}
	
	function index()
	{
		$data = '';
		
		$this->load->view('index', $data);
	}
	
	function get_json()
	{
		$data = array();
		
		for($i = 0; $i < 5; $i++)
		{
			$sub_data = array('first','second',array('first', 'second', 'third'));
			
			array_push($data, $sub_data);
		}
		
		echo json_encode($data);	
	}
}