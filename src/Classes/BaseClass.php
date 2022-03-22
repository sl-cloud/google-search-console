<?php
namespace CooderSteve\Classes;

use CooderSteve\Classes\DBFactory;
use CooderSteve\Models\ModelConfigurations as ModelConfigurations;

class BaseClass
{
    
    protected $_db;
    
    public function __construct()
    {
        $this->_db = DBFactory::getConnection();
    }
}