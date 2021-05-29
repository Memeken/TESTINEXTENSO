<?php
// Declaration of a variable containing the maximum number to display.
$nbMax=100;

//Setting up a loop For that just allows us to modify the variable and adapt the length of the test.
for ($i=0; $i <$nbMax ; $i++) { 
//Use of modulos to find out if a number is divisible by 3 and 5 / by 5 and finally by 3.
    if($i%3==0 && $i%5==0){
        echo $i.':FizzBuzz<br/>';
    }elseif($i%5==0){
        echo $i.':Buzz<br/>';
    }elseif($i%3==0){
        echo $i.':Fizz<br/>';
    }

}

?>
