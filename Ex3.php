<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>

<form method="post">
    Entrez un nombre n :
    <input type="number" name="n" required>
    <button type="submit">Valider</button>
</form>

<?php
if (isset($_POST['n'])) {
    $n = $_POST['n'];

    echo "<h3>1. Table de multiplication :</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }

    echo "<h3>2. Triangle centré :</h3>";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;";
        }
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h3>3. Carré :</h3>";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    echo "<h3>4. Nombres pairs :</h3>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }

    echo "<h3>5. Somme :</h3>";
    $somme = 0;
    for ($i = 1; $i <= $n; $i++) {
        $somme += $i;
    }
    echo "Somme = $somme";

    echo "<h3>6. Pair ou impair :</h3>";
    if ($n % 2 == 0) {
        echo "$n est pair";
    } else {
        echo "$n est impair";
    }
}
?>

</body>
</html>