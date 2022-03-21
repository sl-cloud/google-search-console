<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;

class DBFactory
{

    protected static $Db;

    public static function getConnection(string $dbType = NULL): void
    {
        switch ($dbType) {
            case "mysql":
                self::_setDb(new MySQLConnection());
                break;
            default:
                self::_setDb( new SleekDbConnection());
                break;
        }
    }
    
    protected static function _setDb(DBConnectionInterface $Db): DBConnectionInterface {
        self::$Db = $Db;
        
        echo "Db Connection Successful.";
        return self::$Db->connect();
    }
}