<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Van Gorp',
        'slogan' => '',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'assortiment' => 'Assortiment',
            'zuurdesembrood' => 'Zuurdesembrood',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.2',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
