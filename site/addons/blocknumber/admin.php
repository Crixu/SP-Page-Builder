<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_blocknumber',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_DESC'),
		'attr'=>array(
			'title'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
				'std'=>  ''
				),
			'heading_selector'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
				'values'=>array(
					'h1'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
					'h2'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
					'h3'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
					'h4'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
					'h5'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
					'h6'=>JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
					),
				'std'=>'h3',
			),

			'title_fontsize'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
				'std'=>''
				),

			'title_text_color'=>array(
				'type'=>'color',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
				),	

			'title_margin_top'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
				'placeholder'=>'10',
				),

			'title_margin_bottom'=>array(
				'type'=>'number',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
				'placeholder'=>'10',
				),	
							
			'heading'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_HEADING'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_HEADING_DESC'),
				'std'=>  ''
				),
			'text'=>array(
				'type'=>'editor', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet consectetuer rutrum dignissim et neque id.',
				),
			'number'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_NUMBER'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_NUMBER_DESC'),
				'std'=>'01',
				),
			'size'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_SIZE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_SIZE_DESC'),
				'std'=>'48',
				),
			'background'=>array(
				'type'=>'color', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_BACKGROUND'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_BACKGROUND_DESC'),
				'std'=>'#333',
				),
			'color'=>array(
				'type'=>'color', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_COLOR'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_COLOR_DESC'),
				'std'=>'#FFF',
				),
			'border_radius'=>array(
				'type'=>'number', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_BORDER_RADIUS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKNUMBER_BORDER_RADIUS_DESC'),
				'placeholder'=>'5',
				),
			'alignment'=>array(
				'type'=>'select',
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
				'values'=>array(
					'left'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
					'center'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CENTER'),
					'right'=>JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
					),
				'std'=>'left',
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