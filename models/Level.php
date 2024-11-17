<?php

namespace Model;

class Level extends ActiveRecord {
    protected static $table = 'level';
    protected static $columnsDB = ['id','level'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->level = $args['level'] ?? '';
    }
}