<?php
//admin=default controller
require_once 'AppController.php';
require_once __DIR__.'/../Models//User.php';
require_once __DIR__.'/../Repository//UserRepository.php';

class AdminController extends AppController {

    public function index()
    {
        $userRepository = new UserRepository();
        $this->render('users', ['user' => $userRepository->getUser($_SESSION['id'])]);
    }

    public function users()
    {   
        $userRepository = new UserRepository();
        
        header('Content-type: application/json');
        http_response_code(200);
        
        $users = $userRepository->getUsers();
        echo $users ? json_encode($users) : '';
    }
}