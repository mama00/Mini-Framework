<?php 
namespace Framework\Kernel;

use Framework\Kernel\Utilities\Database;

class BaseModel 
{
    protected static $pdo;
    protected $table;
    protected $primaryKey;

    public static function query(String $query,$parameter)
    {
        if(empty(self::$pdo))
            self::$pdo=Database::getDbInstance();
        $response=self::$pdo->prepare($query);
        $response->execute($parameter);
        return $response;
    }
    public function total()
    {

    }
    public function getById($id)
    {

    }

    public function insert($contenu)
    {

      /*  $query='INSERT INTO '.$this->table.'(';
        foreach($contenu as $clef=>$valeur)
        {
            $query+=$clef.',';
        }
        $query+=') VALUES(';
        foreach($contenu as $ct)
        $query+=':?';
        $query+=')';
        foreach($contenu as $ct)

        */
    }

    public  function all()
    {
        if(empty(self::$pdo))
            self::$pdo=Database::getDbInstance();
        $query= self::$pdo->prepare('SELECT * FROM '.$this->table);
        $query->execute();
        return $query;
    }
 
    

}