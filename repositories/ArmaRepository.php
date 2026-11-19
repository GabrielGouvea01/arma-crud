<?php 
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Arma.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class ArmaRepository implements RepositoryInterface{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::conectar();
    }

    #[Override]
    public function criar($objeto){
        $sql = "INSERT INTO armas (modelo,calibre,ano_lancamento) VALUES (:m, :c, :a)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':m' => $objeto->getModelo(),
            ':c' => $objeto->getCalibre(),
            ':a' => $objeto->getAnoLancamento()
        ]);
    }

    #[Override]
    public function listar(){
        $stmt = $this->conn->query("SELECT * FROM armas ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    #[Override]
    public function buscarPorId($id){
        $stmt = $this->conn->prepare("SELECT * FROM armas WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    #[Override]
    public function atualizar($id, $objeto){
        $stmt = $this->conn->prepare("UPDATE armas SET  modelo=:m ,calibre=:c ,ano_lancamento=:a WHERE id = :id");
        $stmt->execute([
            ':m' => $objeto->getModelo(),
            ':c' => $objeto->getCalibre(),
            ':a' => $objeto->getAnoLancamento(),
            ':id' => $id
        ]);
    }

    #[Override]
    public function excluir($id){
        $stmt = $this->conn->prepare("DELETE FROM armas WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
?>