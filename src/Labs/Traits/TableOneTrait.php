<?php

namespace src\Labs\Traits;

trait TableOneTrait {
    /**
     * @return string
     */
    public function getRow() {
        return 'row';
    }
    /**
     * @return int
     */
    public function getID() {
        return rand(0, 100);
    }
}