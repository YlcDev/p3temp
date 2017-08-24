<?php

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 05/05/17
 * Time: 11:14
 */
class BddManager
{
    protected $bdd;

    public function getBdd()
    {
        $bdd = new PDO('mysql:host=localhost; dbname=projet3;charset=utf8', 'root', '41424521', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
    }

}