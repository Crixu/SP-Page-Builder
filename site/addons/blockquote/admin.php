<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content', 
		'addon_name'=>'sp_blockquote',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE_DESC'),
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

			'text'=>array(
				'type'=>'textarea', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE_TEXT_DESC'),
				'std'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.',
				),
			'footer'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE_FOOTER'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_BLOCKQUOTE_FOOTER_DESC'),
				'std'=>'John Doe',
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