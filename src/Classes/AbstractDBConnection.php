<?php
namespace CooderSteve\Classes;

abstract class AbstractDBConnection
{

    protected $useTable;

    public function fromTable(string $table): self
    {
        $this->useTable = $table;
        return $this;
    }
}