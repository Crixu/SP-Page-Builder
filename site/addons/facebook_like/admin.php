<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_facebook_like',
		'category'=>'Social',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_DESC'),
		'attr'=>array(
			'appid'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_APPID'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_APPID_DESC'),
				'std'=> ''
				),
			'layout'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_LAYOUT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_LAYOUT_DESC'),
				'values'=>array(
					'standard'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_STANDARD'),
					'button_count'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_BUTTON_COUNT'),
					'button'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_BUTTON'),
					'box_count'=>JText::_('COM_SPPAGEBUILDER_ADDON_FACEBOOK_LIKE_BOX_COUNT'),
					),
				'std'=>'standard'
				),
			)

		)
	);