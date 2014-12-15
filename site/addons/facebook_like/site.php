<?php

defined ('_JEXEC') or die('resticted aceess');

AddonParser::addAddon('sp_facebook_like','sp_facebook_like_addon');

function sp_facebook_like_addon($atts){

	extract(spAddonAtts(array(
		'layout'=>'',
		'width'=>225,
		'appid'=>'274875399357309',
		), $atts));

	$output = '';

	if(!defined('_SPPB_FB')) {

		define('_SPPB_FB', 1);

		$output .= '<div id="fb-root"></div>';
		$output .= '<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId='.$appid.'&version=v2.0";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, "script", "facebook-jssdk"));</script>';
	}

	$output .= '<div class="fb-like" data-href="'.JURI::current().'" data-layout="' . $layout . '" data-width="' . $width . '" data-action="like" data-show-faces="false" data-share="false"></div>';

	return $output;

}