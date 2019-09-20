<?php 
namespace Framework\Kernel;

use Framework\Kernel\Utilities\Database;
use Framework\Kernel\Interfaces\PdoBaseModel;

class BaseModel  implements PdoBaseModel
{
    protected static $pdo;
    protected $table;
    protected $primaryKey;

    public static function query(String $query,$parameter=NULL)
    {

        if(empty(self::$pdo))
            self::$pdo=Database::getDbInstance();
        $response=self::$pdo->prepare($query);
        if($parameter==NULL)
        $response->execute();
        else
        $response->execute($parameter);
        return $response;
    }
    public function total()
    {

    }
    public function getById($id)
    {
        if(empty(self::$pdo))
        self::$pdo=Database::getDbInstance();
        $response=self::query('SELECT * FROM '.$this->table.' WHERE '.$this->primaryKey.'='.$id);
        return $response->fetch();
        
    }

    public function insert($contenu)
    {

    }

    public  function all()
    {
        $tableauArray=array();
        if(empty(self::$pdo))
            self::$pdo=Database::getDbInstance();
        $query= self::$pdo->prepare('SELECT * FROM '.$this->table);
        $query->execute();
        while($response=$query->fetch())
        {
            array_push($tableauArray,$response);
        }
        return $tableauArray;
    }
 
    

}