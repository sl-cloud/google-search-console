<?php
namespace CooderSteve\Models;

use CooderSteve\Models\BaseModel;
use CooderSteve\Interfaces\DBConnectionInterface;

class ModelConfigurations extends BaseModel
{

    public function __construct(DBConnectionInterface $DB)
    {
        
        $this->_table = 'configurations';
        parent::__construct($DB);
        
        echo "Model Loaded";
    }
}