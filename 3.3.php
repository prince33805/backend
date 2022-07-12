<?php

function recursive($re){
    $each=0;
    if($re==1){
        // echo "N=1 return 1";
        return 1;
    }else{
        //n>1
        for($i=1;$i<$re;$i++){
            $each = (2 * recursive($re-1));
        }
        return $each;
    }
}
// echo recursive(3);


function sum($each,$count){
    $sum = 0;
    if($each==1){
        $sum += $each*$count;
        return $sum;
    }else{
        //each>1
        for($each;$each>0;$each--){
            $sum += recursive($each) * $count ; 
        }
        return $sum;
    }
}
// echo sum(10,5);


function arrsum($each,$countinput){
    $array_sum = [];
    //assume 5 type x 10 , 10 = $n , 5 = $countinput
    for($i=0;$i<$each;$i++){
        array_push($array_sum,sum($i,$countinput));
    }
    return $array_sum;
}
// print_r(arrsum(10,3));


function findround($n,$countinput){
    //array , (max) 12 = $each
    $array_sum = arrsum(12,$countinput);
    echo "array_sum : ";
    print_r($array_sum);

    //string
    json_encode($array_sum);
    $count_arrsum = count($array_sum);
    for($i=0;$i<$count_arrsum;$i++){
        if($n<=$array_sum[$i]){
            return $i;
            // return $array_sum[$i];
            break;
        }
    }
}
// echo findround(36,3);

function findsize($n,$countinput){
    //array , 12 = $each
    $array_sum = arrsum(12,$countinput);
    //string
    json_encode($array_sum);
    $count_arrsum = count($array_sum);
    for($i=0;$i<$count_arrsum;$i++){
        if($n<=$array_sum[$i]){
            // return $i;
            return $array_sum[$i];
            break;
        }
    }
}

function is_fruit(array $f,$n){

    $countinput = count($f);
    // $f=implode(' ',$f);

    $round = findround($n,$countinput);
    $each = recursive($round);
    $size = findsize($n,$countinput);


    $fruits_array = [];
    // echo gettype($f);

    array_chunk($f,$countinput);
    // print_r($f[1]);

    //push first 5 
    for($i=0;$i<$countinput;$i++){
        array_push($fruits_array,$f[$i]);
    }
    
    $array_round = [];
    for($r=2;$r<$round+1;$r++){
        array_push($array_round,$r);
    }
    json_encode($array_round); 

    $array_each = [];
    for($e=0;$e<count($array_round);$e++){
        $each = recursive($array_round[$e]);
        array_push($array_each,$each);
    }

    
    //push others
    $index = 0;
    $k=0;
    
    //for loop index5 -> $size  
    for($i=$countinput; $i+$index<$size; $i++){

        //run each
        for($e=0;$e<$array_each[$k];$e++){
            array_push($fruits_array,$f[$index]);
            // echo $array_each[$e];
        }
        $index++;

        // reset $index , $k++
        if($index == $countinput){
            $index = 0;
            $k++;
        }
    }

    echo "fruits_array : ";
    print_r($fruits_array)."\n";
    // echo $countf = count($fruits_array);
    
    echo "size = ".$size."\n";
    echo "repeat : ".json_encode($array_each)."\n"; 
    echo "output at n(".$n.") : ".$fruits_array[$n-1]."\n";
}


// test pass with 
// array size 2 n=[1,4094]
// array size 3 n=[1,6141]
// array size 4 n=[1,8188]
// array size 5 n=[1,10235]
// array size 6 n=[1,12282]
// array size 7 n=[1,14329]
// array size 14 n=[1,28658]



// test here , please test 1 by 1 
// is_fruit(['a','b'],186);
// is_fruit(['a','b','c'],436);
// is_fruit(['a','b','c','d'],656);
// is_fruit(['a','b','c','d','e'],10235);
// is_fruit(['a','b','c','d','e','f'],644);
// is_fruit(['a','b','c','d','e','f','g'],980);
// is_fruit(['a','b','c','d','e','f','g','aa','bb','cc','dd','ee','ff','gg'],98);
