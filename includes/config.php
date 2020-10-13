<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Patesserie Van Gorp',
        'slogan' => '',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'page1' => 'Page 1',
            'page2' => 'Page 2',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.2',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
