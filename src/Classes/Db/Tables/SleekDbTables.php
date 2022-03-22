<?php
namespace CooderSteve\Classes\Db\Tables;

use CooderSteve\Classes\Db\DbTables;

class SleekDbTables extends DbTables
{

    public function fetchAll(): array
    {
        return $this->_db->findAll();
    }

    public function insert(array $data): self
    {
        $this->_lastResult = $this->_db->updateOrInsert($data);
        return $this;
    }

    public function update(int $id, array $data): self
    {
        $this->_lastResult = $this->_db->updateById($id, $data);
        return $this;
    }

    public function delete(int $id): self
    {
        $this->_lastResult = $this->_db->deleteById($id);
        return $this;
    }
}