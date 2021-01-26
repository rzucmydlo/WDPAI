<?php

require_once "Repository.php";
require_once __DIR__.'//..//Models//Post.php';
require_once __DIR__.'/../Repository/UserRepository.php';


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
                $post['image'],
                $post['likes'],
                $post['dislikes'],
                $post['description'],

            );
        }

        //$posts = mysqli_connect("localhost","root","","users"); //keep your db name
        //$sql = "SELECT * FROM posts";
        //$sth = $posts->query($sql);
        //$result=mysqli_fetch_array($sth);
        //echo '<img src="../Public/img/uploads/one.png'
        //.base64_encode( $result['two.png'] ).'"/>';   

        return $result;
    }
}

