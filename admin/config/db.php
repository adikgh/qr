<?php

class db {

    public static $host = 'localhost';
    public static $user = 'root';
    public static $pass = '';
    public static $name = 'lighterior';
    public static $connect = null;

    // public static $host = 'srv-pleskdb24.ps.kz:3306';
    // public static $user = 'gprogkz_ad';
    // public static $pass = 'Adikako9gh';
    // public static $name = 'gprogkz_aru';
    // public static $connect = null;

    public function __construct() {
        self::$connect = mysqli_connect(self::$host, self::$user, self::$pass, self::$name);
        if(!self::$connect) exit("Настройте конфигурацию базы данных!");
    }

    public static function query($sql) {
        return mysqli_query(self::$connect, $sql);
    }
    
}