<?php

class Event extends Controller 
{
	private $id_event;
	
	function __construct()
	{
		parent::Controller(); 
	}
	
	function index()
	{		
		$this->load->model('event_model');
		
		$data['data'] = $this->event_model->get_event();
		
		$this->load->view('event', $data);
	}
	
	function add_event(){
		$this->load->model('event_model');
		
		$this->event_model->create_event();
		
		redirect('event');
	}
	
	function update_event(){
		$this->load->model('event_model');
		
		$this->event_model->update_event();
		
		redirect('event');
	}
	
	function delete_event(){
		$this->load->model('event_model');
		
		$data['json'] = $this->event_model->delete_event();
		
		echo $data['json'];
	}
}

/* End of file event.php */
/* Location: application/modules/event/controllers/event.php */