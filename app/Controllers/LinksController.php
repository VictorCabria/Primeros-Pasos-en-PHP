
<?php
class LinksController {

    public function index()
    {
        $db = new Database;
        $title = 'Proyectos';

        $links = $db->query('SELECT * FROM links ORDER BY id DESC')->get();
        
        require __DIR__ . '/../../resources/links.template.php';
    }
    public function create()
    {
        $title = 'Registrar Proyecto';


        require __DIR__ . '/../../resources/links-create.template.php';

    }

    public function store()
    {
        $db = new Database;

        $validator = new Validator($_POST , [
            'title' => 'required|min:3|max:255',
            'url' => 'required|url|max:255',
            'description' => 'required|min:10|max:500'
           ]);
        
            if($validator->passed()){
         
        $db->query('INSERT INTO links (title, url, description) VALUES (:title, :url, :description)', [
            'title' => $_POST['title'],
            'url' => $_POST['url'],
            'description' => $_POST['description']
             ]   
            );
            header('Location: /links');
            exit;
            } 
                $errors = $validator->errors();

                $title = 'Registrar Proyecto';

                require __DIR__ . '/../../resources/links-create.template.php';
            
        
    }
    
}




