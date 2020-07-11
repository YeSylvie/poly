<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class Transaction extends Entity {

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

}
