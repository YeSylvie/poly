<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TransactionsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator) {
        $validator->notEmpty('user_id')
            ->notEmpty('label')
            ->maxLength('label', 255)
            ->allowEmpty('credit')
            ->allowEmpty('debit');
        return $validator;
    }
}
