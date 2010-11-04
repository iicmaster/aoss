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
		$data['json'] = array();
		//$data['pattern'] = array("<td>#var1</td>",array('<td><b>#var1</b><i>#var2</i><u>#var3</u></td>'));
		
		echo json_encode($data);	
	}
}