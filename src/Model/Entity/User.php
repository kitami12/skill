<?php
// src/Model/Entity/Auth_information.php
namespace App\Model\Entity;
aaa
use Cake\ORM\Entity;

class User extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
    }