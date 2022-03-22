<?php
namespace CooderSteve\Models;

use CooderSteve\Models\BaseModel;
use CooderSteve\Models\ModelConfigurations;

class ModelMain extends BaseModel
{
    protected $_tableName = 'configurations';

    public function test(): self
    {
        // Load a different Model
        $this->ModelConfigurations = new ModelConfigurations();
        return $this;
    }
}