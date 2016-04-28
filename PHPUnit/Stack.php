<?php

/*
 *  Copyright (c) 2014 Janitza electronics GmbH
 */

/**
 * Description of Stack
 *
 * @author cedric.takongmo
 */
class Stack {

    private $list = array();

    public function __construct() {
        
    }

    public function isEmpty() {
        return count($this->list) === 0;
    }

    public function push($data) {
        array_push($this->list, $data);
    }

    public function pop() {
        return array_pop($this->list);
    }

    public function getList() {
        return $this->list;
    }

    public function setList($list) {
        return $this->list = $list;
    }

}
