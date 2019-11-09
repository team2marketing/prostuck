<?php

/**
 * Extension Manager/Repository config file for ext "prostuck".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Prostuck',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Team2Marketing\\Prostuck\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Schenk',
    'author_email' => 'info@team2marketing.de',
    'author_company' => 'Team 2 MArketing',
    'version' => '1.0.0',
];
