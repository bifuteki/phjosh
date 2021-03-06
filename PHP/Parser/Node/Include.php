<?php
require_once 'PHP/Parser/Node.php';

class PHP_Parser_Node_Include extends PHP_Parser_Node {
    public $arg;

    public function __construct($lineno, $col, $type, $arg) {
        parent::__construct($lineno, $col);
        $this->type = $type;
        $this->arg = $arg;
    }

    public function accept($visitor) {
        $visitor->visitInclude($this); 
    }
}

