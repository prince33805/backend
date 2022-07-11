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
// print_r(arrsum(10,5));


function findround($n,$countinput){
    //array , 10 = $each
    $array_sum = arrsum(10,$countinput);
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
// echo findround(36,5);

function findsize($n,$countinput){
    //array , 10 = $each
    $array_sum = arrsum(10,$countinput);
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
    echo $size = findsize($n,$countinput);

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
    echo json_encode($array_round); 

    $array_each = [];
    for($e=0;$e<count($array_round);$e++){
        $each = recursive($array_round[$e]);
        array_push($array_each,$each);
    }
    echo json_encode($array_each); 

    //push others
    $index = 0;
    //push $k=0 = 2nd round
    $k=0;
    
    //for loop index5 -> $size  
    for($i=$countinput; $i+$index<$size; $i++){
        for($e=0;$e<$array_each[$k];$e++){
            array_push($fruits_array,$f[$index]);
        }
        $index++;
    }

    echo json_encode($fruits_array);
    echo $countf = count($fruits_array);
    echo $fruits_array[$n-1];
}


//test pass with 5 array and 1<n<15
is_fruit(['a','b','c','d','e'],15);
// is_fruit(['a','b','c','d','e'],10);