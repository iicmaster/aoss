<?php
class News extends Controller 
{
	private $id_news;
	
	function __construct()
	{
		parent::Controller(); 
	}
	
	function index()
	{		
		$this->load->model('news_model');
		
		$data['data'] = $this->news_model->get_news();
		
		$this->load->view('news', $data);
	}
	
	function add_news(){
		$this->load->model('news_model');
		
		$this->news_model->create_news();
		
		redirect('news');
	}
	
	function update_news(){
		$this->load->model('news_model');
		
		$this->news_model->update_news();
		
		redirect('news');
	}
	
	function delete_news(){
		$this->load->model('news_model');
		
		$data['json'] = $this->news_model->delete_news();
		
		echo $data['json'];
	}
}

/* End of file news.php */
/* Location: application/modules/news/controllers/news.php */