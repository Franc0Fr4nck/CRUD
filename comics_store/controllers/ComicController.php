<?php
require_once 'models/Comic.php';

class ComicController {
    private $comic;

    public function __construct($db) {
        $this->comic = new Comic($db);
    }

    // Mostrar todos los cómics
    public function index() {
        $comics = $this->comic->getAll();
        require ('./views/comic_list.php');
    }

    // Mostrar el formulario para añadir un cómic
    public function create() {
        require ('./views/create.php');
    }

    // Guardar un nuevo cómic
    public function store($titulo, $autor, $genero, $precio, $stock) {
        $this->comic->add($titulo, $autor, $genero, $precio, $stock);
        header('Location: comic_list.php');
    }

    // Mostrar el formulario para editar un cómic
    public function edit($id) {
        $comic = $this->comic->getById($id);
        require ('./views/edit.php');
    }    

    // Actualizar un cómic
    public function update($id, $titulo, $autor, $genero, $precio, $stock) {
        $this->comic->update($id, $titulo, $autor, $genero, $precio, $stock);
        header('Location: index.php');
    }

    // Eliminar un cómic
    public function destroy($id) {
        $this->comic->delete($id);
        header('Location: index.php');
    } 
    
}
?>
