<?php
namespace CooderSteve\Models;

use CooderSteve\Interfaces\DBConnectionInterface;
use CooderSteve\Classes\Db\DbTablesInterface;

class BaseModel implements DbTablesInterface
{

    protected $_table;

    protected $_dB;

    public function __construct(DBConnectionInterface $DB)
    {
        $this->_db = $DB;
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
}