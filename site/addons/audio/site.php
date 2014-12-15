<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_audio','sp_audio_addon');

function sp_audio_addon($atts, $content){

	extract(spAddonAtts(array(
		"title" 				=> '',
		"heading_selector" 		=> 'h3',
		"title_fontsize" 		=> '',
		"title_text_color" 		=> '',
		"title_margin_top" 		=> '',
		"title_margin_bottom" 	=> '',	
		"mp3_link" 				=> '',
		"ogg_link" 				=> '',
		"autoplay" 				=> '',
		"repeat" 				=>'',
		"class" 				=>'',
		), $atts));

	$output  = '<div class="sppb-addon sppb-addon-audio ' . $class . '">';

	if($title) {

		$title_style = '';
		if($title_margin_top) $title_style .= 'margin-top:' . (int) $title_margin_top . 'px;';
		if($title_margin_bottom) $title_style .= 'margin-bottom:' . (int) $title_margin_bottom . 'px;';
		if($title_text_color) $title_style .= 'color:' . $title_text_color  . ';';
		if($title_fontsize) $title_style .= 'font-size:'.$title_fontsize.'px;line-height:'.$title_fontsize.'px;';

		$output .= '<'.$heading_selector.' class="sppb-addon-title" style="' . $title_style . '">' . $title . '</'.$heading_selector.'>';
	}

	$output .= '<div class="sppb-addon-content">';
	$output .='<audio controls '.$autoplay.' '.$repeat.'>';
	$output .='<source src="'.$mp3_link.'" type="audio/mp3">';
	$output .='<source src="'.$ogg_link.'" type="audio/ogg">';
	$output .='Your browser does not support the audio element.';
	$output .='</audio>';
	$output .= '</div>';

	$output .= '</div>';

	return $output;
}