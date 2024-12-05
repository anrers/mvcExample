<?php

use Model\Database;
use Model\Migrations\CreateTaskTableMigration;

require_once 'vendor/autoload.php';

$database = new Database();

(new CreateTaskTableMigration($database))->up();