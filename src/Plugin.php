<?php

namespace ahnames\hidev\config\php;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@ahnames/hidev/config/php/config.yml',
        ],
        'views' => [
            '@ahnames/hidev/config/php/views',
        ],
    ];
}
