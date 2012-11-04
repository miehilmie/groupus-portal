<?php

class User {

    public static function &instance() {
        if (!self::$instance) {
            self::$instance = new User();
        }
        return self::$instance;
    }

}