<?php
class Site extends Controller 
{
	private $id_member;
	private $member_theme;
	
	function __construct()
	{
		parent::Controller(); 
		
		// Load Model
		$this->load->model('member/member_model');
		
		// Set user ID
		if($this->input->post('id_member'))
		{
			$this->id_member = $this->input->post('id_member');
		}
		else
		{
			$this->id_member = '595401';
		}
		
		// Set user theme
		$this->member_theme = $this->member_model->get_theme($this->id_member); 
	}
	
	function index()
	{		
		// Load Model
		$this->load->model('content_model');
		
		$data['slideshow'] 			= $this->content_model->get_slideshow();
		$data['vdo'] 				= $this->content_model->get_vdo();
		$data['testimonial']		= $this->content_model->get_testimonial();
		$data['title'] 				= 'Agel Independent';
		$data['image_asset_path'] 	= 'theme/'.$this->member_theme['name'].'/'.$this->member_theme['color'].'/';
		$data['image_path'] 		= base_url().'assets/modules/site/image/'.$data['image_asset_path'];
		
		$this->load->view($this->member_theme['name'].'/index', $data);
	}
	
	function product()
	{	
		$data['member_theme'] 	= $this->member_theme;
		$data['title'] 			= 'Product';
		
		$this->load->view($data['member_theme']['name'].'/product', $data);
	}
}

/* End of file site.php */
/* Location: application/modules/site/controllers/site.php */