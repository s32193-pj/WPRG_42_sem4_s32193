<?php

//zad1
//$fruits = array("apple", "banana", "raspberry");
//
//foreach ($fruits as $fruit) {
//    $len = strlen($fruit)-1;
//    for ($i = $len; $i >= 0; $i--) {
//        echo $fruit[$i];
//    }
//
//    echo "\n";
//}

//zad2
//$x = 179;
//$prime = true;
//if($x < 2){
//    $prime = false;
//}else{
//    for($i = 2; $i <= sqrt($x); $i++){
//        if($x % $i == 0){
//            $prime = false;
//            break;
//        }
//    }
//}
//if($prime){
//    echo "pierwsza";
//}else{
//    echo "nie pierwsza";
//}

//zad3
//function fibonacci($count) {
//    $wynik = [];
//
//    $a = 0;
//    $b = 1;
//
//    for ($i = 0; $i < $count; $i++) {
//        $wynik[] = $a;
//        $temp = $a + $b;
//        $a = $b;
//        $b = $temp;
//    }
//
//    return $wynik;
//}
//
//foreach (fibonacci(10) as $num) {
//    if($num%2!=0){
//        echo $num . "\n";
//    }
//}

//zad4
//$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
//been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
//galley of type and scrambled it to make a type specimen book. It has survived not only five
//centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
//popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
//and more recently with desktop publishing software like Aldus PageMaker including versions of
//Lorem Ipsum.";
//
//$kaboom_text = explode(" ", $text);
//
//
//
//
//foreach ($kaboom_text as $index => $kaboom) {
//    if (preg_match('/[[:punct:]]/', $kaboom)) {
//        unset($kaboom_text[$index]);
//    }
//}
//
//foreach ($kaboom_text as $kaboom) {
//    echo $kaboom."\n";
//}
//
//$kaboom_text = array_values($kaboom_text);
//$kaboom_len = count($kaboom_text);
//
//$associative_kaboom =[];
//if ($kaboom_len % 2 == 0) {
//
//    foreach ($kaboom_text as $index => $kaboom) {
//        if($index % 2 == 0){
//            $associative_kaboom[$kaboom] = $kaboom_text[$index+1];
//        }
//    }
//}else{
//    echo "melko";
//}


?>