<?php
class Site extends Controller 
{
	private $id_member;
	private $member_theme;
	private $config;
	
	function __construct()
	{
		parent::Controller(); 
		
		// Load Model
		$this->load->model('member/member_model');
		$this->load->model('content_model');
		
		// Load helper
		$this->load->helper('youtube');
		
		// Set user ID
		if($this->input->post('id_member'))
		{
			$this->id_member = $this->input->post('id_member');
		}
		else
		{
			$this->id_member = '595401';
		}
		
		// configuration
		$this->member_theme = $this->member_model->get_theme($this->id_member); 
		
		$this->config['theme_asset_path'] = 'theme/'.$this->member_theme['name'].'/'.$this->member_theme['color'].'/';
		$this->config['image_path'] = base_url().'assets/modules/site/image/'.$this->config['theme_asset_path'];
		
		$this->config['slideshow'] 			= $this->content_model->get_slideshow();
		$this->config['vdo'] 				= $this->content_model->get_vdo();
		$this->config['testimonial']		= $this->content_model->get_testimonial();
		
	}
	
	function index()
	{				
		$data['title'] 				= 'Agel Independent';
		
		$data['slideshow'] 			= $this->config['slideshow'];
		$data['vdo'] 				= $this->config['vdo'];
		$data['testimonial']		= $this->config['testimonial'];
		
		$data['theme_asset_path'] 	= $this->config['theme_asset_path'];
		$data['image_path'] 		= $this->config['image_path'];
		
		$this->load->view($this->member_theme['name'].'/index', $data);
	}
	
	function product()
	{			
		$data['title'] 			= 'Product';
		
		$data['slideshow'] 		= $this->config['slideshow'];
		$data['testimonial']	= $this->content_model->get_testimonial($this->uri->segment(3, 1));
		$data['product']		= $this->content_model->get_product($this->uri->segment(3, 1));
		
		
		$data['theme_asset_path'] 	= $this->config['theme_asset_path'];
		$data['image_path'] 		= $this->config['image_path'];
		
		$this->load->view($this->member_theme['name'].'/product', $data);
	}
	
	function company()
	{			
		$data['title'] 			= 'Company';
		
		$data['slideshow'] 		= $this->config['slideshow'];
		$data['company']		= $this->content_model->get_company($this->uri->segment(3, 1));
		
		$data['theme_asset_path'] 	= $this->config['theme_asset_path'];
		$data['image_path'] 		= $this->config['image_path'];
		
		$this->load->view($this->member_theme['name'].'/company', $data);
	}
	
	function contact()
	{				
		$data['title'] 				= 'Contact';
		
		$data['slideshow'] 			= $this->config['slideshow'];
		$data['vdo'] 				= $this->config['vdo'];
		
		$data['theme_asset_path'] 	= $this->config['theme_asset_path'];
		$data['image_path'] 		= $this->config['image_path'];
		
		$this->load->view($this->member_theme['name'].'/contact', $data);
	}
}

/* End of file site.php */
/* Location: application/modules/site/controllers/site.php */