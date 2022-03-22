<?php
namespace CooderSteve\Models;

use CooderSteve\Interfaces\DBConnectionInterface;
use CooderSteve\Classes\Db\DbTablesInterface;
use CooderSteve\Classes\DBFactory;
use Exception;

class BaseModel
{

    protected $_tableName;

    protected $_dB;

    protected $_dbTable;

    final public function __construct(string $dbType = NULL)
    {
        if (is_null($this->_tableName)) {
            $thisClassName = get_class($this);
            throw new exception("Need to declare a table for Model {$thisClassName}");
        }
        
        $this->_db = DBFactory::getConnection($dbType)->connect();
        $this->_dbTable = DBFactory::getDbTable($dbType);
    }

    public function getDbTable()
    {
        return $this->_dbTable;
    }
}