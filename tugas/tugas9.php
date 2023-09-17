<?php
$n = 21; // Tentukan panjang deret Fibonacci
$a = 0;
$b = 1;

echo "Deret Fibonacci dari 0 hingga $n:<br>";

echo "$a, $b"; // Cetak angka awal (0, 1)

for ($i = 2; $i <= $n; $i++) {
    $c = $a + $b; // Hitung angka berikutnya dalam deret Fibonacci
    echo ", $c"; // Cetak angka tersebut
    $a = $b; // Geser nilai $a dan $b ke kanan
    $b = $c;
}
?>
