<?php

namespace Example\Model\Table;

use Cake\ORM\Table;

class TagsTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsToMany('Tags');
    }
}
