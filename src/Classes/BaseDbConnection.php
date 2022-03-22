<?php
namespace CooderSteve\Classes;

use CooderSteve\Classes\DBFactory;

class BaseDbConnection
{

    protected $_dataStorage;

    public function getStorage() {
        return $this->_dataStorage;
    }
}