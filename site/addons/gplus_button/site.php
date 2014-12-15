<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_gplus_button','sp_gplus_button_addon');

function sp_gplus_button_addon($atts){

	extract(spAddonAtts(array(
		'size'=>'',
		'annotation'=>'',
		'width'=>'',
		), $atts));

	$doc = JFactory::getDocument();
	$doc->addScript('https://apis.google.com/js/plusone.js');

	$output = '<div class="g-plusone" data-href="' . JURI::current() . '" data-size="' . $size . '" data-annotation="' . $annotation . '"></div>';

	return $output;
	
}