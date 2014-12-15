<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_flickr','sp_flickr_addon');

function sp_flickr_addon($atts){

	extract(spAddonAtts(array(
		'title'					=>'',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',		
		'id'					=>'',
		'count'					=>'',
		'class'					=>'',
		), $atts));

		if($id=='') $id = '35591378@N03';

	if($id) {
		$output  = '<div class="sppb-addon sppb-addon-flickr ' . $class . '">';

		if($title) {

			$title_style = '';
			if($title_margin_top) $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
			if($title_margin_bottom) $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
			if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
			if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';

			$output .= '<'.$heading_selector.' class="sppb-addon-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
		}

		$output .= '<div class="sppb-addon-content">';
		$output .= '<ul class="sppb-flickr-gallery" data-id="'. $id .'" data-count="'. $count .'"></ul>';
		$output .= '</div>';
		
		$output .= '</div>';

		return $output;
	}

	return;
	
}