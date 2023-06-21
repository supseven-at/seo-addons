<?php

declare(strict_types=1);

$GLOBALS['TCA']['pages']['columns']['tx_seoaddons_sitemap_exclude'] = [
    'exclude'     => true,
    'onChange'    => 'reload',
    'l10nMode'    => 'exclude',
    'displayCond' => 'FIELD:no_index:REQ:false',
    'label'       => 'LLL:EXT:seo_addons/Resources/Private/Language/locallang.xlf:field.pages.tx_seoaddons_sitemap_exclude.label',
    'config'      => [
        'type'       => 'check',
        'renderType' => 'checkboxToggle',
        'items'      => [
            [
                0                    => '',
                1                    => '',
                'invertStateDisplay' => true,
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'sitemap',
    'tx_seoaddons_sitemap_exclude',
    'before:sitemap_changefreq'
);

$GLOBALS['TCA']['pages']['columns']['sitemap_changefreq']['displayCond'] =
$GLOBALS['TCA']['pages']['columns']['sitemap_priority']['displayCond'] = [
    'AND' => [
        'FIELD:no_index:REQ:false',
        'FIELD:tx_seoaddons_sitemap_exclude:REQ:false',
    ],
];
