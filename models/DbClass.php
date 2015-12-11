<?php


namespace models;

use config\Config;

class DbClass
{
    /** @var  DbClass */
    private static $instance;

    private $connection;

    private function __construct()
    {
    }

    private function __clone()
    {
        if (self::$instance === null) {
            throw new \RuntimeException('instance not exists');
        }
        return self::$instance;
    }


    public static function connect()
    {
        self::$instance = new self();

        $config = Config::getInstance();
        self::$instance->connection = mysqli_connect($config->get('host'), $config->get('username'), $config->get('password'), $config->get('database'));
        if (!self::$instance->connection) {
            throw new \RuntimeException("Ошибка подключения к базе данных: " . mysqli_error(self::$instance->connection));
        }
        return self::$instance;
    }

    /**
     * Получение инстанса
     *
     *
     * @return DbClass
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            throw new \RuntimeException('instance not exists');
        }
        return self::$instance;
    }

    /**
     * Выполняет запрос
     *
     *
     *
     * @param string $sql
     * @return array
     * @throws RuntimeException
     */
    public function query($sql)
    {
        $result = array();
        if ($stmt = mysqli_query($this->connection, $sql)) {
            if ($stmt !== TRUE) {
                while ($col = mysqli_fetch_assoc($stmt)) {
                    $result[] = $col;
                }
            } else {
                return TRUE;
            }
        } else {
            throw new \RuntimeException('Error');
        }
        return ($result);
    }


}