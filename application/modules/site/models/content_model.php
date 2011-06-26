<?php

class Content_model extends Model 
{	
/*----------------------------------------------------------------------------------------------------*/
/* Construct */
/*----------------------------------------------------------------------------------------------------*/

	function __construct()
	{
		parent::Model();   
	}
	
/*----------------------------------------------------------------------------------------------------*/
/* Sildeshow */
/*----------------------------------------------------------------------------------------------------*/

	function get_slideshow()
	{
		$_query = $this->db->get('content_slideshow');
		
		return $_query;
	}
	
/*----------------------------------------------------------------------------------------------------*/
/* VDO */
/*----------------------------------------------------------------------------------------------------*/
	
	function get_vdo($id=NULL)
	{
		$this->db->order_by('id');
		$_query = $this->db->get('content_vdo');
		
		return $_query;
	}
	
/*----------------------------------------------------------------------------------------------------*/
/* Testimonail */
/*----------------------------------------------------------------------------------------------------*/

	function get_testimonial($id_product=NULL, $limit=5)
	{
		if($id_product != NULL)
		{
			// check ageless set
			$id_product = ($id_product >= 8 && $id_product <= 14) ? 15 : $id_product;
			
			$this->db->where('id_product', $id_product);
			
			// if product is not ageless disply doctor testimonail
			if($id_product != 15)
			{
				$this->db->or_where('id_product', '0');
			}
		}
		
		$this->db->order_by('id', 'random');
		$this->db->limit($limit);
		
		$_query = $this->db->get('content_testimonial');
		
		return $_query;
	}
	
/*----------------------------------------------------------------------------------------------------*/
/* Company */
/*----------------------------------------------------------------------------------------------------*/
		
	function get_company($id)
	{
		$this->db->where('id', $id);
		$_query = $this->db->get('content_company');
		
		return $_query->row_array();
	}
	
	function get_company_menu()
	{
		$_query = $this->db->get('content_company');
		
		$_menu = '<ul>';
		
		foreach($_query->result() as $_row)
		{
			$_menu .= '<li><a id="'.$_row->id.'" href="'.base_url().'site/company/'.$_row->id.'#main_content" title="'.$_row->topic.'">'.$_row->topic.'</a></li>';
		}
		
		$_menu .= '</ul>';
		
		return $_menu;
	}
	
/*----------------------------------------------------------------------------------------------------*/
/* Product */
/*----------------------------------------------------------------------------------------------------*/
	
	function get_product($id_product)
	{
		$this->db->where('id', $id_product);
		$_query = $this->db->get('content_product');
		
		return $_query->row_array();
	}
	
	function get_product_list($product_group)
	{
		$this->db->where('group', $product_group);
		$this->db->where('status', '1');
		$this->db->order_by('name');
		$_query = $this->db->get('content_product');
		
		$_product_list = '<ul>';
		
		foreach($_query->result() as $_row)
		{
			$_product_list .= 	'<li>'.
									'<a id="'.$_row->id.'" href="'.base_url().'site/product/'.$_row->id.'" title="'.$_row->name.'">'.
										image_asset('product/small/'.$_row->id.'.png', 'site', array('width'=>'32', 'height'=>'32', 'alt'=>$_row->name)).
										$_row->name.
									'</a>'.
								'</li>';
		}
		$_product_list .= '</ul>';
		
		return $_product_list;
	}
	
	function get_product_menu()
	{
		$this->db->where('group', 'Product Groups');
		$_query = $this->db->get('content_product');
		
		$_product_menu = '<ul>';
		
		foreach($_query->result() as $_row)
		{
			$_product_menu .= 	'<li>'.
									'<h2>'.$_row->name.'</h2>'.
									$this->get_product_list($_row->name).
								'</li>';
		}
		$_product_menu .= '</ul>';
		
		return $_product_menu;
	}
	
}

/* End of file content_model.php */
/* Location: application/modules/site/models/content_model.php */