<?php
namespace CooderSteve\Classes;

use CooderSteve\Classes\DBFactory as DBFactory;

class Main
{
    protected $Db;
    public function __construct() {
        $this->Db = namespace\DBFactory::getConnection();
    }
}