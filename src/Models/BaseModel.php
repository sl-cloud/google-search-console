<?php
namespace CooderSteve\Models;

use CooderSteve\Interfaces\DBConnectionInterface;
use CooderSteve\Classes\Db\DbTablesInterface;
use Exception;

class BaseModel implements DbTablesInterface
{

    protected $_table;

    protected $_dB;

    public function __construct(DBConnectionInterface $DB)
    {
        $this->_db = $DB;
        if(is_null($this->_table)) {
            $thisClassName = get_class($this);
            throw new exception("Need to declare a table for Model {$thisClassName} before calling parent __construct.");
        }
    }

    public function insert(array $data): bool
    {
        return true;
    }

    public function update(array $data, int $id): bool
    {
        return true;
    }

    public function delete(int $id): bool
    {
        return true;
    }
    
    public function fetchAll(): array
    {
        
    }
}