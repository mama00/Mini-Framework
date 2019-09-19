<?php
namespace Framework\Kernel\Utilities;
class Database
{
    protected static $pdo;
    
    public static function getDbInstance()
    {
        if(empty(self::$pdo))
        {
            try{
                self::$pdo=new \PDO('mysql:host=localhost;dbname=testo','root','');
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                echo $e->getMessages();
            }
            
        }
        return self::$pdo;
    }
}
