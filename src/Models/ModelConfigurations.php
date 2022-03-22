<?php
namespace CooderSteve\Models;

use CooderSteve\Models\BaseModel;

class ModelConfigurations extends BaseModel
{
    public function __construct($DB)
    {
        parent::__construct($DB);
        $this->_table = 'configurations';
        echo "Model Loaded";
    }
    
}