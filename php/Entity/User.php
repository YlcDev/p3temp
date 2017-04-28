<?php

/**
 * Created by PhpStorm.
 * User: troll
 * Date: 23/04/17
 * Time: 15:08
 */
class User extends UserManager
{
    private $id;

    private $username;

    private $plainPassword;

    private $password;

    private $salt;

    private $role;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        return $this->username = $username;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        return $this->plainPassword = $plainPassword;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        return $this->salt = $salt;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        return $this->role = $role;
    }

}