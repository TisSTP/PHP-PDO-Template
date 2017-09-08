<?php

class ConnDB
{

    private $handle;

    public function __construct()
    {
        echo 'construct' . '<br>';
        try {
            $this->handle = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            // set the PDO error mode to exception
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $exception) {
            echo 'error connect db :: => ' . $exception->getMessage();
            exit;
        }
    }

    public function __destruct()
    {
        echo 'destruct' . '<br>';
        $this->handle = null;
    }

    

    public function test()
    {
        echo 'test' . '<br>';
        return 'hello ' . DB_NAME;
    }
}