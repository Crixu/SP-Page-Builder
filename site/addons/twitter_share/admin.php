<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_twitter_share',
		'category'=>'Social',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_DESC'),
		'attr'=>array(
			'showcount'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_SHOWCOUNT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_SHOWCOUNT_DESC'),
				'values'=>array(
					1=>JText::_('JYES'),
					0=>JText::_('JNO'),
					),
				'std'=>1,
				),
			'size'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_BUTTON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_BUTTON_SIZE_DESC'),
				'values'=>array(
					''=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_BUTTON_SIZE_STANDARD'),
					'large'=>JText::_('COM_SPPAGEBUILDER_ADDON_TWITTER_SHARE_BUTTON_SIZE_LARGE'),
					),
				),
			)
		)
	);