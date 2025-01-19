<?php

namespace Model;

class UsersRole extends ActiveRecord {
    protected static $table = 'users';
    protected static $columnsDB = ['id', 'name', 'lastname', 'email', 'id_user', 'id_level', 'level'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->lastname = $args['lastname'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->id_user = $args['id_user'] ?? '';
        $this->id_level = $args['id_level'] ?? '';
        $this->level = $args['level'] ?? '';
    }
}