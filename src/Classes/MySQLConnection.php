<?php
namespace CooderSteve\Classes;

use CooderSteve\Interfaces\DBConnectionInterface;

class MySQLConnection implements DBConnectionInterface
{

    public function connect(): self
    {}
}