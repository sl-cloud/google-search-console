<?php
namespace CooderSteve\Classes\Db;

use CooderSteve\Interfaces\DBConnectionInterface;

abstract class DbTables implements DbTablesInterface
{
    protected $_db;
    protected $_lastResult;
    final public function __construct(DBConnectionInterface $DB)
    {
        $this->_db = $DB->getStorage();
    }
    
    public function getLastResult() {
        return $this->_lastResult;
    }
}