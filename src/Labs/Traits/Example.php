<?php

require('TableOneTrait.php');
require('TableTwoTrait.php');
use src\Labs\Traits\TableOneTrait;
use src\Labs\Traits\TableTwoTrait;

class Example {
    use TableOneTrait, TableTwoTrait {
        TableOneTrait::getID insteadof TableTwoTrait;
        TableTwoTrait::getID as getIDTableOne; 
    }
}

$e = new Example;
var_dump($e->getID()); # Returns random number of class TableTwoTrait;
var_dump($e->getIDTableOne()); # Returns random number of class TableOneTrait;
var_dump($e->getRow());
var_dump($e->getField());