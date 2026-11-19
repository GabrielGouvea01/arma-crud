<?php 
require_once __DIR__ . '/../repositories/ArmaRepository.php';
$repo = new ArmaRepository();
if($_POST){
    $arma = new Arma(
        $_POST['modelo'],
        $_POST['calibre'],
        $_POST['ano_lancamento']
    );

    $repo->atualizar($_POST['id'],$arma);
    header("Location: index.php");
}
$arma = $repo->buscarPorId($_GET['id']);
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $arma['id'] ?>">
    <input type="text" name="modelo" value="<?= $arma['modelo'] ?>"><br>
    <input type="text" name="calibre" id="calibre" value="<?= $arma['calibre'] ?>"><br>
    <input type="text" name="ano_lancamento" id="ano_lancamento" value="<?= $arma['ano_lancamento'] ?>"><br>
    <button>Atualizar</button>

</form>