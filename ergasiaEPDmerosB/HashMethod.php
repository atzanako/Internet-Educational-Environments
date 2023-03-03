<?php

class HashMethod
{
    private $password;

    public function __construct($password_new){
        $this->password = $password_new;
    }

    public function hashFunc($password_new){
        $hash =  hash('md5', $password_new);
        $hash .= 'kLsP2stYdeW6';

        return $hash;
    }
}