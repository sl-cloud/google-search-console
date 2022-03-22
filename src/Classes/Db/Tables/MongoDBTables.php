<?php
namespace CooderSteve\Classes\Db\Tables;

use CooderSteve\Classes\Db\DbTables;

class MongoDBTables extends DbTables
{

    public function fetchAll(): array
    {
        return [];
    }

    public function insert(array $data): self
    {
        $this->_lastResult = false;
        return $this;
    }

    public function update(int $id, array $data): self
    {
        $this->_lastResult = false;
        return $this;
    }

    public function delete(int $id): self
    {
        $this->_lastResult = false;
        return $this;
    }
}