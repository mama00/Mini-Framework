<?php
namespace Framework\Kernel\Interfaces;


interface PdoBaseModel
{
    public static function query(String $query,$parameter);
}