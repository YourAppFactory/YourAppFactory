<?php

namespace Model;

class Role extends ActiveRecord {
    protected static $table = 'role';
    protected static $columnsDB = ['id','level'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->level = $args['level'] ?? '';
    }
}