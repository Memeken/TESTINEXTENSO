<?php



function arrayDigit($num)
{
    $n = str_split($num); //array of variable $num for know lenght of integer
    $arrayDigit = array();
    for ($i = 0; $i < count($n); $i++) {//loops with lenght max of $num

        $arrayDigit[] = $n[$i];//creation of number list in array
        /* echo $n[$i]; */
    }
    print_r($arrayDigit);
}
$number = 99;
arrayDigit($number);//call the function
