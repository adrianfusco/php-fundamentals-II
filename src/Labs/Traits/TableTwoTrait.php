<?php

namespace src\Labs\Traits;

trait TableTwoTrait {
    /**
     * @return string
     */
    public function getField() {
        return 'field';
    }
    /**
     * @return int
     */
    public function getID() {
        return rand(0, 100);
    }
}