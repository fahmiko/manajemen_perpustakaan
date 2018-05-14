<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function paging_config($url, $total, $limit){
	$config['base_url'] = base_url() . $url;
	$config['total_rows'] = $total;
	$config['per_page'] = $limit;
	$config["uri_segment"] = 3;
	$config['full_tag_open'] 	= '<nav><ul class="pagination justify-content-center">';
	$config['full_tag_close'] 	= '</ul></nav>';
	
	$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['num_tag_close'] 	= '</span></li>';
	
	$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
	$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
	
	$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
	
	$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['prev_tagl_close'] 	= '</span></li>';
	
	$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['first_tagl_close'] = '</span></li>';
	
	$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['last_tagl_close'] 	= '</span></li>';
	return $config;
}
?>