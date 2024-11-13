<?php
class Comic {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Obtener todos los cómics
    public function getAll() {
        $query = $this->db->query("SELECT * FROM comics");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un cómic por su ID
    public function getById($id) {
        $query = $this->db->prepare("SELECT * FROM comics WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // Añadir un nuevo cómic
    public function add($titulo, $autor, $genero, $precio, $stock) {
        $query = $this->db->prepare("INSERT INTO comics (titulo, autor, genero, precio, stock) VALUES (?, ?, ?, ?, ?)");
        return $query->execute([$titulo, $autor, $genero, $precio, $stock]);
    }

    // Actualizar un cómic existente
    public function update($id, $titulo, $autor, $genero, $precio, $stock) {
        $query = $this->db->prepare("UPDATE comics SET titulo = ?, autor = ?, genero = ?, precio = ?, stock = ? WHERE id = ?");
        return $query->execute([$titulo, $autor, $genero, $precio, $stock, $id]);
    }

    // Eliminar un cómic
    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM comics WHERE id = ?");
        return $query->execute([$id]);
    }
}
?>
