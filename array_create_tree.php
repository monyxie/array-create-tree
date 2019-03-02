<?php

namespace Monyxie;

function array_create_tree(array $array, $id_attr = 'id', $parent_attr = 'pid', $children_attr = 'children')
{
    $array = array_column($array, null, $id_attr);

    foreach ($array as $key => $val) {
        if ($val[$parent_attr]) {
            if (isset ($array [$val [$parent_attr]])) {
                $array [$val[$parent_attr]][$children_attr][] = &$array[$key];
            }
        }
    }

    foreach ($array as $key => $val) {
        if ($val[$parent_attr]) unset ($array[$key]);
    }

    return array_values($array);
}