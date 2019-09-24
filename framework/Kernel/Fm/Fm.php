<?php 
namespace Framework\Kernel\Fm;
class Fm
{
    public function make(String $type,$filename)
    {
        require_once __DIR__.'/Templates/Templates.php';
            switch($type)
            {
                case 'middleware':
                    if(!file_exists(__DIR__.'/../../../app/Middleware/'.$filename.'.php'))
                    {
                        $fichier=fopen(__DIR__.'/../../../app/Middleware/'.$filename.'.php','a');
                        $template=$middleware;
                    }
                    else 
                    {
                        echo 'File already exist';
                        die;
                    }
                    
                break;
                case 'event':
                
                if(!file_exists(__DIR__.'/../../../app/Event/Event/'.$filename.'.php'))
                    {
                        $fichier=fopen(__DIR__.'/../../../app/Event/Event/'.$filename.'.php','a');
                        $template=$event;
                    }
                    else 
                    {
                        echo 'File already exist';
                        die;
                    }
                
                break;
                case 'listener':
                if(!file_exists(__DIR__.'/../../../app/Event/Listener/'.$filename.'.php'))
                {
                    $fichier=fopen(__DIR__.'/../../../app/Event/Listener/'.$filename.'.php','a');
                    $template=$listener;
                }
                else 
                {
                    echo 'File already exist';
                    die;
                }
                break;
                case 'controller':
                if(!file_exists(__DIR__.'/../../../app/Controller/'.$filename.'.php'))
                {
                    $fichier=fopen(__DIR__.'/../../../app/Controller/'.$filename.'.php','a');
                    $template=$controller;
                }
                else 
                {
                    echo 'File already exist';
                    die;
                }
                break;
                case 'model':
                if(!file_exists(__DIR__.'/../../../app/Model/'.$filename.'.php'))
                {
                    $fichier=fopen(__DIR__.'/../../../app/Model/'.$filename.'.php','a');
                    $template=$model;
                }
                else 
                {
                    echo 'File already exist';
                    die;
                }
                break;
                default :
                echo 'invalid command';
                die;
                break;
            }

            if($fichier)
            {
                
                fputs($fichier,$template);
                fclose($fichier);
                echo "$type created";

            }
    }

    public function handle(String $argc,$argv)
    {
        if(isset($argc))
        {
            $request=explode(':',$argv[1]);  
            if(method_exists(new FM,$request[0]))
            {
                $function=$request[0];
                $this->$function($request[1],$argv[2]);
            }
            else
            echo 'invalid command';
        }
    }
}

?>