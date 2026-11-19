<?php 
require_once __DIR__ . '/../repositories/ArmaRepository.php';

if($_POST){
    $arma = new Arma($_POST['modelo'],$_POST['calibre'],$_POST['ano_lancamento']);
    (new ArmaRepository())->criar($arma);
    header("Location: index.php");
}

?>

<form action="" method="post">
    <input type="text" name="modelo" id="modelo" placeholder="Modelo" required><br>
    <input type="text" name="calibre" id="calibre" placeholder="Calibre" required><br>
    <input type="text" name="ano_lancamento" id="ano_lancamento" placeholder="Ano de lancamento" required><br>
    <button>Salvar</button>
</form>