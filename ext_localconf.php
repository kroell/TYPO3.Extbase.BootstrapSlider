<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SoerenKroell.' . $_EXTKEY,
	'Bootstrapslider',
	array(
		'Slider' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Slider' => '',
		
	)
);
