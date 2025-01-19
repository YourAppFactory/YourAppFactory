<?php

namespace Model;

class Promo extends ActiveRecord {
    protected static $table = 'promo';
    protected static $columnsDB = ['id', 'status', 'promo', 'promo_mobile'];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->status = $args['status'] ?? '';
        $this->promo = $args['promo'] ?? '';
        $this->promo_mobile = $args['promo_mobile'] ?? '';
    }

    public function validate(){
        if(!$this->promo){
            self::$alerts['error'][] = "promo_alert-promo";
        }
        if(!$this->promo_mobile){
            self::$alerts['error'][] = "promo_alert-promo-mobile";
        }
        return self::$alerts;
    }
}