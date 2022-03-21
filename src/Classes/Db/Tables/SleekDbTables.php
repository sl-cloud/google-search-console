<?php
namespace CooderSteve\Classes\Db\Tables;

use CooderSteve\Classes\Db\DbTablesInterface;

class SleekDbTables implements DbTablesInterface
{
    public function insert(array $data): bool
    {
        return true;
    }
    
    public function update(int $id, array $data): bool
    {
        return true;
    }
    
    public function delete(int $id): bool
    {
        return true;
    }
}