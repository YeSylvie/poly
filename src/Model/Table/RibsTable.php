<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RibsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator) {
        $validator->notEmpty('user_id')
            ->notEmpty('holder')
            ->maxLength('holder', 255)
            ->notEmpty('bic')
            ->maxLength('bic', 11)
            ->notEmpty('iban')
            ->maxLength('iban', 27)
            ->allowEmpty('idcard');
        return $validator;
    }
}
