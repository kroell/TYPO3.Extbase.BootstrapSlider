<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_skbootstrapslider_domain_model_item'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_skbootstrapslider_domain_model_item']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, caption_title, caption_text, image',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, caption_title, caption_text, caption_bullets, background_position_x, background_position_y, link, image, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_skbootstrapslider_domain_model_item',
				'foreign_table_where' => 'AND tx_skbootstrapslider_domain_model_item.pid=###CURRENT_PID### AND tx_skbootstrapslider_domain_model_item.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'caption_title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.caption_title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'caption_text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.caption_text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'caption_bullets' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.caption_bullets',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'link' => array(
		    'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.link',
		    'exclude' => 1,
		    'config' => array(
		        'type' => 'input',
		        'size' => '50',
		        'max' => '256',
		        'eval' => 'trim',
		        'wizards' => array(
		            '_PADDING' => 2,
		            'link' => array(
		                'type' => 'popup',
		                'title' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.link',
		                'icon' => 'link_popup.gif',
		                'script' => 'browse_links.php?mode=wizard',
		                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
		            ),
		        ),
		        'softref' => 'typolink',
		    ),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'background_position_x' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.background_position_x',
			'config' => array(
				'type' => 'input',
				'size' => 3,
				'eval' => 'int'
			),
		),
		
		'background_position_y' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.background_position_y',
			'config' => array(
				'type' => 'input',
				'size' => 3,
				'eval' => 'int'
			),
		),
		'background_size' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:sk_bootstrap_slider/Resources/Private/Language/locallang_db.xlf:tx_skbootstrapslider_domain_model_item.background_size',
			'config' => array(
				'type' => 'input',
				'size' => 3,
				'eval' => 'int'
			),
		),
		
		'slider' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);
