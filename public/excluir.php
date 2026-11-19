<?php 
require_once __DIR__ . '/../repositories/ArmaRepository.php';

(new ArmaRepository())->excluir($_GET['id']);
header("Location: index.php");

?>