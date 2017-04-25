<?php
/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 16:26
 */

// connection a la bdd
// renvoi l'objet PDO
function getBdd()
{
    $bdd = new PDO('mysql:host=localhost; dbname=projet3;charset=utf8', 'root', '41424521', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
