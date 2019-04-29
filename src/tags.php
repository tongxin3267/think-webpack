<?php

/**
 * 生成 tag 标签
 * @param string $name
 * @param string $type
 */
function encore_tags(string $name, string $type)
{
    $entry_points_file = root_path() . '/public/build/entrypoints.json';
    if (file_exists($entry_points_file)) {
        $data = json_decode(file_get_contents($entry_points_file), true);
        $js = $data['entrypoints'][$name][$type];
        foreach ($js as $i) {
            switch ($type) {
                case 'css':
                    echo '<link rel="stylesheet" href="' . $i . '" />' . "\r\n";
                    break;
                case 'js':
                    echo '<script src="' . $i . '"></script>' . "\r\n";
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
function encore_link_tags(string $name = '')
{
    encore_tags($name, 'css');
}

/**
 * script 标签
 * @param string $name
 */
function encore_script_tags(string $name = '')
{
    encore_tags($name, 'js');
}
