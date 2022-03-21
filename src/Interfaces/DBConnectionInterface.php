<?php
namespace CooderSteve\Interfaces;

interface DBConnectionInterface
{

    public function connect(): self;

    public function select(array $fields): self;

    public function table(string $table): self;

    public function where($whereArray): self;

    public function insert(array $data): bool;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;
}
