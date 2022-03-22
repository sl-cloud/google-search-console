<?php
namespace CooderSteve\Classes;

use CooderSteve\Classes\BaseClass;
use CooderSteve\Models\ModelConfigurations;

class Main extends BaseClass
{

    protected $_db;

    public function __construct()
    {
        $this->_db = DBFactory::getConnection();

        // Load Models
        $this->ModelConfigurations = new ModelConfigurations($this->_db);
    }
}