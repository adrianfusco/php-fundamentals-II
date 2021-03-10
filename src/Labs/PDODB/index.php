<?php

require('Database.php');
use src\Labs\PDODB\Database;

$d = new Database();
$user = $d->findUser("adrianfusco");
var_dump($user);