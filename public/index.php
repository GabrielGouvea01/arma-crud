<?php 
require_once __DIR__ . '/../repositories/ArmaRepository.php';

$repo = new ArmaRepository();
$armas = $repo->listar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Armas</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px;
        }

        nav a{
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        table{
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid #eee;
            padding: 8px;
        }
        th{
            background: #eee;
        }
    </style>
</head>
<body>
    <h1>Sistema de Cadastro de armas</h1>
    <nav>
        <a href="index.php">Listar Armas</a>
        <a href="criar.php">Nova Arma</a>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Calibre</th>
            <th>Ano de Lançamento</th>
            <th>Ações</th>
        </tr>
        <?php foreach($armas as $a): ?>
            <tr>
                <td><?= $a['id'] ?></td>
                <td><?= $a['modelo'] ?></td>
                <td><?= $a['calibre'] ?></td>
                <td><?= $a['ano_lancamento'] ?></td>
                <td><a href="editar.php?id=<?= $a['id'] ?>">Editar</a>| <a href="excluir.php?id=<?= $a['id'] ?>" onclick="return confirm('Deseja Excluirr?')">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>