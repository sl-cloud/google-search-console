<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;

class DBFactory
{
    public static function getConnection(string $dbType = NULL): DBConnectionInterface
    {
        switch ($dbType) {
            case "mongo":
                return  new MongoDBConnection();
                break;
            default:
                return  new SleekDbConnection();
                break;
        }
    }
}