<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;
use PDO;
use PDOException;

class PublicController
{

    public function index()
    {   
        $posts = Post::all();
        $months = ['January', 'February', 'March'];
        view('index', compact('months', 'posts'));
        //view('index', ['months' => $months, 'posts' => $posts]);
    }

    public function us()
    {
        $months = ['January', 'February', 'March'];
        $posts = Post::all();
        view('us', compact('months', 'posts'));
    }
    public function form()
    {
        dump($_GET, $_POST);
        // $email = '';
        // if(isset($_GET['email'])){
        //     $email = $_GET['email'];
        // }
        // $email = isset($_GET['email']) ? $_GET['email'] : '';
        $email = $_GET['email'] ?? $_POST['email'] ?? '';
        view('form', compact('email'));
    }
    public function answer()
    {
        dump($_GET, $_POST);
    }
}
