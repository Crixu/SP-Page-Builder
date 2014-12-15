<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_gplus_button',
		'category'=>'Social',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_DESC'),
		'attr'=>array(
			'size'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE_DESC'),
				'values'=>array(
					'small'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE_SMALL'),
					'medium'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE_MEDIUM'),
					'standard'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE_STANDARD'),
					'tall'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_SIZE_TALL'),
					),
				'std'=>'standard'
				),
			'annotation'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_ANNONATION'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_ANNONATION_DESC'),
				'values'=>array(
					'none'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_ANNONATION_NONE'),
					'bubble'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_ANNONATION_BUBBLE'),
					'inline'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_ANNONATION_INLINE'),
					),
				'std'=>'bubble'
				),
			'width'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_WIDTH'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GPLUS_BUTTON_WIDTH_DESC'),
				'std'=>'300',
				),
			)

		)
	);