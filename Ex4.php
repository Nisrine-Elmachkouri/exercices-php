<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci</title>
</head>
<body>

<h2>Suite de Fibonacci (100 termes)</h2>

<?php

function afficherFibonacci($n) {
    $f0 = 0;
    $f1 = 1;

    echo "F0 = $f0 <br>";
    echo "F1 = $f1 <br>";

    for ($i = 2; $i < $n; $i++) {
        $fn = $f0 + $f1;
        echo "F$i = $fn <br>";

        $f0 = $f1;
        $f1 = $fn;
    }
}

afficherFibonacci(100);

?>

</body>
</html>