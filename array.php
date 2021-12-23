<?php

    $a = array(
        "Debu"=>"10",
        "Emon"=>"30",
        "Bisu"=>"40",
        "Binod"=>"50"
    );
    $x = array(
        "a"=>"10",
        "b"=>"30",
        "c"=>"40",
        "d"=>"50"
    );
    $b = array_change_key_case($a,CASE_UPPER);
    $c = array_change_key_case($a,CASE_LOWER);
    echo "<pre>";
    print_r($b);
    print_r($c);
    $d = 40;
    echo is_array($a).'<br/>'; // it return boolian value
    print_r(in_array("40",$a)) ;//
    print_r(array_merge($a,$x));// দুইটাকে একসাথে নিয়ে সাজিয়েছে।
    print_r(array_keys($x,10));// array_keys(array,paramitar(optional))
    echo array_key_exists("b",$x);// it return boolian value আছে কি-না চেক করে ।
    array_shift($x); //এটা প্রথম ইনডেক্স এবং ভেলূ মুছে দেয় ।
    print_r($x);
    print_r(array_pop($a));// এইটা array এর শেষ ভেলূ মুছে দিবে এবং যেইটা মুছবে সেটা প্রিন্ট করা হয়েছে
    print_r($a);
    array_push($a,"lobon","90");
    print_r($a);



?>