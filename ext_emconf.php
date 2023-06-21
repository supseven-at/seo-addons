<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title'            => 'SEO Addons',
    'description'      => 'Commonly used addons and configs for EXT:seo',
    'category'         => 'fe',
    'author'           => 'Georg Großberger',
    'author_email'     => 'office@supseven.at',
    'author_company'   => 'supseven',
    'shy'              => '',
    'priority'         => '',
    'module'           => '',
    'state'            => 'stable',
    'internal'         => '',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'modify_tables'    => '',
    'clearCacheOnLoad' => 0,
    'lockType'         => '',
    'version'          => '1.0.0',
    'constraints'      => [
        'suggest' => [
            'news' => '',
        ],
        'depends' => [
            'solr' => '',
        ],
    ],
];
