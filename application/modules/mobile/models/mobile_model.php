<?php
class Mobile_model extends Model 
{		
	function get_news_list_by_date($type, $date)
	{
		// check type, news or promotion
		$type = ($type == 'news' || $type == 0) ? '0' : '1';
		$this->db->where('type', $type);
		$this->db->where('DATE(date_add)', $date);
		$_query = $this->db->get('news');
		$_list = '';
		foreach($_query->result() as $_row)
		{
			$_list .= 	'<li>'.
							'<h3>'.$_row->topic.'</h3>'.
							'<p>'.$_row->detail.'</p>'.
						'</li>';
		}
		
		return $_list;
	}
	
	function get_news_list_group_by_date($type)
	{
		$this->load->library('thaidate');
		
		// check type, news or promotion
		$type = ($type == 'news' || $type == '0') ? '0' : '1';
		
		$this->db->select('date(date_add) as date_add, date_add as full_date_add, count(*) as total');
		$this->db->where('type', $type);
		$this->db->group_by('date(date_add)');
		$this->db->order_by('date_add', 'desc');
		$this->db->limit(5);
		$_query = $this->db->get('news');
		
		$_list = '<ul class="wrap" data-role="listview">';
		
		foreach($_query->result() as $_row)
		{
			$_today = date('Y-m-d');
			$_yesterday = date("Y-m-d", time()-86400);
			
			if($_today == $_row->date_add)
			{
				$_news_date = 'วันนี้';
			}
			else if($_yesterday == $_row->date_add)
			{
				$_news_date =  'เมื่อวาน';
			}
			else
			{
				$_news_date = $this->thaidate->convert_date($_row->full_date_add, 'G1');
			}
			
			$_list .= 	'<li data-role="list-divider">'.
							'<h2>'.$_news_date.'</h2>'.
							'<span class="ui-li-count">'.$_row->total.'</span>'.
							
						'</li>';
			$_list .=	$this->get_news_list_by_date($type, $_row->date_add);
		}
		
		$_list .= '</ul>';
		
		return $_list;
	}
}

/* End of file mobile_model.php */
/* Location: application/modules/mobile/models/mobile_model.php */