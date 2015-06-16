<?php

namespace Example\Model\Table;

use Cake\ORM\Table;

class BookmarksTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsTo('Users');
        $this->belongsToMany('Tags');
    }
}
