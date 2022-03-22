<?php
namespace CooderSteve\Classes\Db;

interface DbTablesInterface
{
    public function fetchAll(): array;
    
    public function insert(array $data): self;

    public function update(int $id, array $data): self;

    public function delete(int $id): self;
    
    
}