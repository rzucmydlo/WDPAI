<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'//..//Database.php';
require_once __DIR__.'//..//Repository//PostRepository.php';

class BoardController extends AppController {

    public function getLatestPhotos()
    {   
        $database = new Database();
        $database->connect();

        $postRpository = new PostRepository();
        $posts=$postRpository->getPosts();
                // $post1 = new Post('one.png', 2, 0, "dnfksdgtjlfkd");
                // $post2 = new Post('two.png', 45, 0, "siaalalal");
                // $post3 = new Post('three.png', 12, 1, "tatdtdtddt");

                // $data = [$post1, $post2, $post3];
        $this->render('board', ['posts' => $posts]);
    }
}