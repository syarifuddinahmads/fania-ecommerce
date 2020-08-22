<?php


class Database
{

    protected $host = "localhost";
    protected $username ="root";
    protected $password = "udin";
    protected $database ="fania_ecommerce";

    public function __construct()
    {
        mysqli_connect($this->host,$this->username,$this->password);
        mysqli_select_db($this->database);

        echo 'aku terkoneksi';
    }


}