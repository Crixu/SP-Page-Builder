<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_twitter_share','sp_twitter_share_addon');

function sp_twitter_share_addon($atts){

	extract(spAddonAtts(array(
		'showcount'=>'',
		'size'=>'',
		), $atts));

	$output = '';

	if(!defined('_SPPB_TWITTER')) {
		define('_SPPB_TWITTER', 1);
		$output .= "<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
	}

	$data = '';

	if(!$showcount) $data .= ' data-count="none"';
	
	if($size=='large') $data .= ' data-size="large"';

	$output .= '<a href="'.JURI::current().'" class="twitter-share-button" '. $data .'>Tweet</a>';

	return $output;

}