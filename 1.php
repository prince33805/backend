<?php

function test(array $array){
    $count = count($array);
    sort($array);
    $newarr2 = [];
    // array_push($newarr2,"[");
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$j] - $array[$i] == 2) {
                array_push($newarr2,[$array[$i],$array[$j]]) ;
            }
        }
    }
    echo json_encode($newarr2);
}

// test([1, 3, 2, 4]);
// test([4, 1, 2, 3]);
// test([1, 23, 3, 4, 7]);
test([4, 3, 1, 5, 6]);






