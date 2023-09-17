<?php
echo "Deret Bilangan Prima dari 0 hingga 200:<br>";

for ($number = 2; $number <= 200; $number++) {
    $isPrime = true;
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if ($isPrime) {
        echo "$number, ";
    }
}

?>
