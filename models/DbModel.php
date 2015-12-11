<?php

namespace models;

abstract class DbModel
{

    public $mdb;

    public function __construct()
    {
        require_once('DbClass.php');
        $this->mdb = DbClass::connect();
    }

}