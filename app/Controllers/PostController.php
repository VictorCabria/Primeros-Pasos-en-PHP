




<?php
class PostController {

    public function show()
    {

        $title = 'Proyectos';
        $db = new Database;
        $post = $db->query('SELECT * FROM posts ORDER BY id = :id DESC', [
            'id' => $_GET['id'] ?? null
        ])->firstOrFail();
        
        
        require __DIR__ . '/../../resources/post.template.php';
}


}
