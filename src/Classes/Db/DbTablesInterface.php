<?php
namespace CooderSteve\Classes\Db;

interface DbTablesInterface
{

    public function insert(array $data): bool;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}