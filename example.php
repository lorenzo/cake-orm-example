<?php

require __DIR__ . '/bootstrap.php';

use Cake\ORM\TableRegistry;

$table = TableRegistry::get('Bookmarks');
assert($table instanceof Example\Model\Table\BookmarksTable);
assert(TableRegistry::get('Tags') instanceof Example\Model\Table\TagsTable);
assert(TableRegistry::get('Users') instanceof Example\Model\Table\UsersTable);

$result = $table->find()->contain(['Users', 'Tags']);
echo json_encode($result, JSON_PRETTY_PRINT);
