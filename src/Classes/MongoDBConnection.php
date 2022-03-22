<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;

class MongoDBConnection extends BaseDbConnection implements DBConnectionInterface
{

    public function connect(): self
    {
        return $this;
    }

    public function select(array $fields): self
    {
        return $this;
    }

    public function where($whereArray): self
    {
        return $this;
    }

    public function query(string $query): self
    {
        return $this;
    }
}