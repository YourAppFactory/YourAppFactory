<?php

namespace Model;

class UserLevel extends ActiveRecord {
    protected static $table = 'user_level';
    protected static $columnsDB = ['id','id_user','id_level'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->id_user = $args['id_user'] ?? '';
        $this->id_level = $args['id_level'] ?? '';
    }

    public function validateLevel() {
        if(!$this->id_level) {
            self::$alerts['error'][] = 'auth_alert_level_required';
        }
        return self::$alerts;
    }
}