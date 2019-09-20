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
                $config=require_once __DIR__.'/../../config.php';
                self::$pdo=new \PDO($config['DbType'].':host='.$config['DbHost'].';dbname='.$config['DbName'],$config['DbUsername'],$config['DbPassword']);
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
