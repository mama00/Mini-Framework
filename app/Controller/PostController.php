<?php
namespace App\Controller;
use Framework\Kernel\AppController;
use Framework\Kernel\Utilities\Functions\View;
use App\Model\Post;
class PostController extends AppController
{
    public function index()
    {
        
        
        $contenu= array();
        
        $ModelPosts=new Post;
        $toutLesPosts=$ModelPosts->all();
        while($tt=$toutLesPosts->fetch())
        {
            array_push($contenu,$tt['texte']);
        }
        View::View('home.html',$contenu);
    }
    public function addView()
    {
        View::View('formulaire.html');

    }
    public function postFormulaire()
    {
        try{
            Post::query('INSERT INTO posts (created_at,updated_at,titre,texte) VALUES(?,?,?,?)',array(date('Y-m-d H:i:s')
    ,date('Y-m-d H:i:s'),$_POST['titre'],$_POST['texte']));
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    View::View('formulaireSuccess.html');
    }
}