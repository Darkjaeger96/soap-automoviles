<?php
$getMarca = $_GET['marca'];
?>

<title>Modelos <?php echo $getMarca?></title>
<?php
require_once "cliente.php";

$modelos = $client->ObtenerModelosPorMarca($getMarca);

?>

<h1 style="text-align: center">Modelos <?php echo $getMarca?>:</h1>
<?php

foreach ($modelos as $m) {
    ?>
    <img style="width: 100px; height: 60px" src="assets/images/<?= strtolower($getMarca) ?>.png" alt="logo <?= $getMarca ?>" />
    <h2 style="text-align: center"><?= $m ?></h2>
    <?php
}

?>

