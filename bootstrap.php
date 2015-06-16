<?php

require __DIR__ . '/vendor/autoload.php';

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;

Configure::write('App.namespace', 'Example');
ConnectionManager::config('default', ['url' => 'sqlite:///bookmarkr.db']);
