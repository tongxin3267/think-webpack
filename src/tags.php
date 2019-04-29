<?php

/**
 * 生成 tag 标签
 * @param string $name
 * @param string $type
 */
function encore_tags($name, $type)
{
    $entry_points_file = app()->getRootPath() . 'public/build/entrypoints.json';
    if (file_exists($entry_points_file)) {
        $data = json_decode(file_get_contents($entry_points_file), true);
        foreach ($data['entrypoints'][$name][$type] as $item) {
            switch ($type) {
                case 'css':
                    echo '<link rel="stylesheet" href="' . $item . '" />' . "\r\n";
                    break;
                case 'js':
                    echo '<script src="' . $item . '"></script>' . "\r\n";
                    break;
                default:
            }
        }
    }
}

/**
 * link 标签
 * @param string $name
 */
function encore_link_tags($name = '')
{
    encore_tags($name, 'css');
}

/**
 * script 标签
 * @param string $name
 */
function encore_script_tags($name = '')
{
    encore_tags($name, 'js');
}
