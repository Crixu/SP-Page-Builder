<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_pie_progress',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_DESC'),
		'attr'=>array(
			'percentage'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_PERCENTAGE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_PERCENTAGE_DESC'),
				'placeholder'=>'75',
				'std'=>'75',
				),
			'size'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_SIZE_DESC'),
				'placeholder'=>110,
				'std'=>110,
				),
			'border_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_COLOR_DESC'),
				'std'=>'$f5f5f5',
				),
			'border_active_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_COLOR_ACTIVE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_COLOR_ACTIVE_DESC'),
				'std'=>'#04c6f7',
				),
			'border_width'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_WIDTH'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_BORDER_WIDTH_DESC'),
				'placeholder'=>'5',
				'std'=>5,
				),

			'separator1'=>array(
				'type'=>'separator', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_ICON_OPTIONS'),
				),
			'icon_name'=>array(
				'type'=>'icon', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_ICON_NAME_DESC'),
				'std'=> ''
				),
			'icon_size'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
				'values'=>array(
					'fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_STANDARD'),
					'fa-lg fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_TINY'),
					'fa-2x fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_SMALL'),
					'fa-3x fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_MEDIUM'),
					'fa-4x fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_LARGE'),
					'fa-5x fa-fw'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_EXTRA_LARGE'),
					),
				'std'=>'fa-3x fa-fw',
				),
			'separator1'=>array(
				'type'=>'separator', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PIE_PROGRESS_CONTENT'),
				),
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
				'std'=>  'Pie Progress'
				),
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_FEATURE_BOX_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat.'
				),
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			)

		)
	);