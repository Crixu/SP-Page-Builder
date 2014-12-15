<?php

defined ('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'repeatable', 
		'addon_name'=>'sp_gallery',
		'category'=>'Slider',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_DESC'),
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
			
			'width'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_WIDTH'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_WIDTH_DESC'),
				'std'=>200
				),
			'height'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_HEIGHT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_IMAGE_HEIGHT_DESC'),
				'std'=>200
				),
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=>''
				),
			'repetable_item'=>array(
				'type'=>'repeatable',
				'addon_name' =>'sp_gallery_item',
				'title'=>'Repetable', 
				'attr'=>array(
					'title'=>array(
						'type'=>'text', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_TITLE'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_ITEM_TITLE_DESC'),
						'std'=>'Item 1'
						),
					'thumb'=>array(
						'type'=>'media', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_THUMB'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_THUMB_DESC'),
						),
					'full'=>array(
						'type'=>'media', 
						'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_FULL'),
						'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_GALLERY_FULL_DESC'),
						),
					)
				),
			)
		)
	);

