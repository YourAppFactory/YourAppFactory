<?php

namespace Model;

class Users extends ActiveRecord {
    protected static $table = 'users';
    protected static $columnsDB = ['id', 'name', 'lastname', 'email', 'password'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->lastname = $args['lastname'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
    }

    public function validateLogin() {
        if(!$this->email) {
            self::$alerts['error'][] = 'auth_alert_email_required';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alerts['error'][] = 'auth_alert_email_invalid';
        }
        if(!$this->password) {
            self::$alerts['error'][] = 'auth_alert_password_required';
        }
        return self::$alerts;

    }

    public function validateAccount() {
        if(!$this->name) {
            self::$alerts['error'][] = 'auth_alert_name_required';
        }
        if(!$this->lastname) {
            self::$alerts['error'][] = 'auth_alert_last_name_required';
        }
        if(!$this->email) {
            self::$alerts['error'][] = 'auth_alert_email_required';
        }
        return self::$alerts;
    }

    public function validateEmail() {
        if(!$this->email) {
            self::$alerts['error'][] = 'auth_alert_email_required';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alerts['error'][] = 'auth_alert_email_invalid';
        }
        return self::$alerts;
    }

    public function validatePassword() {
        if(!$this->password) {
            self::$alerts['error'][] = 'auth_alert_password_required';
        }
        if($this->password !== $this->password2) {
            self::$alerts['error'][] = 'auth_alert_password_match';
        }
        return self::$alerts;
    }

    public function newPassword() : array {
        if(!$this->current_password) {
            self::$alerts['error'][] = 'auth_alert_password-old_required';
        }
        if(!$this->new_password) {
            self::$alerts['error'][] = 'auth_alert_password_confirmation-required';
        }
        if(strlen($this->new_password) < 6) {
            self::$alerts['error'][] = 'auth_alert_password_minlength';
        }
        return self::$alerts;
    }

    public function verifyPassword() : bool {
        return password_verify($this->current_password, $this->password );
    }

    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
}