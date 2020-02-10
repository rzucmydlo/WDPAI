<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//Post.php';

class PostRepository extends Repository {

    public function getPosts(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM posts;
        ');
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post) {
            $result[] = new Post(
                "url",
                1,
                1,
                $post['description']
            );
        }

        return $result;
    }
}