<?php
session_start();

$nome1 = $_SESSION["nome"];
$idade1 = $_SESSION["idade"];
$peso1 = $_SESSION["peso"];
$altura1 = $_SESSION["altura"];

    $_nome2["nome"] = $_POST["nome2"];
    $_idade2["idade"] = $_POST["idade2"];
    $_peso2["peso"] = $_POST["peso2"];
    $_altura2["altura"] = $_POST["altura2"];

    $maiorAltura = ($altura1 > $_altura2) ? $nome1 : $nome2;
    $maisvelho = ($idade1 > $idade2) ? $nome1 : $nome2;
    $maiorPeso = ($peso1 > $peso2) ? $nome1 : $nome2;
    header("Location: pagina2.php");
    exit;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h2>Comparação de Informações</h2>
    <p>Quem tem uma altura maior: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maisVelho; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</body>
</html>
