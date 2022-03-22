<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;

class DBFactory
{
    public static function getConnection(string $dbType = NULL): DBConnectionInterface
    {
        switch ($dbType) {
            case "mysql":
                return  new MySQLConnection();
                break;
            default:
                return  new SleekDbConnection();
                break;
        }
    }
}