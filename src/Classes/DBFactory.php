<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;
use CooderSteve\Classes\Db\DbTablesInterface;
use CooderSteve\Classes\Db\Tables\SleekDbTables;

class DBFactory
{

    protected static $_db;

    public static function getConnection(string $dbType = NULL): DBConnectionInterface
    {
        switch ($dbType) {
            case "mongo":
                self::$_db = new MongoDBConnection();
                break;
            default:
                self::$_db = new SleekDbConnection();
                break;
        }
        return self::$_db;
    }

    public static function getDbTable(string $dbType = NULL): DbTablesInterface
    {
        switch ($dbType) {
            case "mongo":
                return new MongoDBTables(self::$_db);
                break;
            default:
                return new SleekDbTables(self::$_db);
                break;
        }
    }
}