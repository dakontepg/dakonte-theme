<?php
// This file is generated. Do not modify it manually.
return array(
	'dakonte-blocks' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'dh/dakonte-blocks',
		'version' => '0.1.0',
		'title' => 'Dakonte Blocks',
		'category' => 'design',
		'icon' => 'admin-appearance',
		'description' => 'Blocks for Dakonte Product Group',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'dakonte-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'blockLayout' => array(
				'type' => 'string',
				'default' => 'image-left'
			)
		)
	),
	'dakonte-introduction' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'dh/dakonte-introduction',
		'version' => '0.1.0',
		'title' => 'Dakonte Introduction',
		'category' => 'design',
		'icon' => 'welcome-widgets-menus',
		'description' => 'Displays introduct to DPG.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'dakonte-introduction',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
