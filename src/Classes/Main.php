<?php
namespace CooderSteve\Classes;

use CooderSteve\Models\BaseModel;
use CooderSteve\Models\ModelConfigurations;

class Main extends BaseModel
{
    protected $_tableName = 'configurations';

    public function test(): self
    {
        // Load Models
        $this->ModelConfigurations = new ModelConfigurations();
        return $this;
    }
}