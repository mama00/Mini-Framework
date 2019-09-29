<?php

namespace App\Controller;

use Framework\Kernel\AppController;
use Framework\Kernel\Utilities\Functions\View;
use App\Model\Post;
use Framework\Kernel\EventManager;
use App\Event\Event\EvenementTest;
use App\Request\FormRequest;

class PostController extends AppController
{
    public function index()
    {
        $ModelPosts=new Post;
        $contenu=$ModelPosts->all();
       
        View::View('home.html',compact('contenu'));
        
    }
    public function addView()
    {
        EventManager::Event(new EvenementTest);
        View::View('formulaire.html');
    }
    public function postFormulaire()
    {
        $validation=new FormRequest;
        $validation->validate($this->request);
        try{
          
            Post::query('INSERT INTO posts (created_at,updated_at,titre,texte) VALUES(?,?,?,?)',array(date('Y-m-d H:i:s')
    ,date('Y-m-d H:i:s'),$this->request->titre,$this->request->texte));
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    View::View('formulaireSuccess.html');
    }

    public function voirPost($id)
    {
        $post=new Post;
        $pp=$post->getById((int)$id);
        View::View('Single.html',compact('pp'));
    }
}