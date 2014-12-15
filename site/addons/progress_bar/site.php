<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_progress_bar','sp_progress_bar_addon');

function sp_progress_bar_addon($atts, $content){

	extract(spAddonAtts(array(
		"type" 		=> '',
		"progress" 	=> '',
		"text" 		=> '',
		"stripped"	=>'',
		"active"	=>'',
		"class"		=>''
		), $atts));

	$output  = '<div class="sppb-progress ' . $class . '">';
	$output .= '<div class="sppb-progress-bar ' . $type . ' ' . $stripped . ' ' . $active . '" role="progressbar" aria-valuenow="' . (int) $progress . '" aria-valuemin="0" aria-valuemax="100" data-width="' . (int) $progress . '%">';

	if($text) {
		$output .= $text;
	}
	
	$output .= '</div>';
	$output .= '</div>';

	return $output;
	
}