<?php
declare(strict_types=1);

require_once('autoload.php');

$user = new UserTableWrapper();

$user->insert(['id' => 1, 'name' => 'Valera']);

print_r($user->get());



