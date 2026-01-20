<?php
if ($argc < 2) {
    echo "Uso: php par_impar.php [numero]\n";
    exit(1);
}

$numero = $argv[1];

if (!is_numeric($numero)) {
    echo "Error: Introduce un número válide.\n";
    exit(1);
}

echo ($numero % 2 == 0) ? "El número $numero es PAR.\n" : "El número $numero es IMPAR.\n";
?>
