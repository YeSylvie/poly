<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator) {
        $validator->notEmpty('lastname')
            ->maxLength('lastname', 255)
            ->notEmpty('firstname')
            ->maxLength('firstname', 255)
            ->notEmpty('gender')
            ->maxLength('gender', 255)
            ->notEmpty('birthday')
            ->notEmpty('phone')
            ->notEmpty('password')
            ->maxLength('password', 255)
            ->allowEmpty('address')
            ->maxLength('address', 255)
            ->allowEmpty('city')
            ->maxLength('city', 255)
            ->allowEmpty('codep')
            ->maxLength('codep', 5)
            ->allowEmpty('accountnumber')
            ->maxLength('accountnumber', 10)
            ->allowEmpty('balance');
        return $validator;
    }
}
