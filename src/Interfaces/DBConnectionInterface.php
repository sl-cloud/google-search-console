<?php
namespace CooderSteve\Interfaces;

interface DBConnectionInterface
{
    
    public function connect(): self;

    public function select(array $fields): self;

    public function fromTable(string $table): self;

    public function where(array $whereArray): self;
    
    public function query(string $query) : self;
}
