<?php
/**
 * This is a Db Adaptor using SleekDb
 * https://sleekdb.github.io/
 */
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;
use SleekDB\Store;

class SleekDbConnection implements DBConnectionInterface
{

    protected $dataDirectory;

    protected $dataStorage;

    protected $useTable;

    public function __construct()
    {
        $this->dataDirectory = getcwd() . "/SleekData";
        $this->useTable = 'configurations';
    }

    public function connect(): self
    {
        $this->dataStorage = new \SleekDB\Store($this->useTable, $this->dataDirectory);
        
        //We will insert some data just to make sure the database is working correctly
        $data = [
            "_id" => 1,
            "name" => "data_directory",
            "value" => $this->dataDirectory
        ];
        $this->dataStorage->updateOrInsert($data);
        return $this;
    }

    public function fromTable(string $table): self
    {
        $this->useTable = $table;
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
    
    public function query(string $query) : self{
        return $this;
    }
}