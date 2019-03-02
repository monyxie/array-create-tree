<?php

use function Monyxie\array_create_tree;

require 'array_create_tree.php';

echo json_encode(array_create_tree([
    ['id' => 1, 'pid' => 0],
    ['id' => 2, 'pid' => 1],
    ['id' => 3, 'pid' => 2],
    ['id' => 4, 'pid' => 0],
    ['id' => 5, 'pid' => 4],
    ['id' => 6, 'pid' => 4],
    ['id' => 7, 'pid' => 6],
]), JSON_PRETTY_PRINT);