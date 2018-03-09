<?php

namespace App\Entities\Classes\C_default;

use App\Entities\Models\C_default\PersonModel;
use Rf\Core\Exception\DataValidationException;

/**
 * Class Person
 *
 * @package App\Entities\Classes\C_default
 */
class Person extends PersonModel {

    /**
     * Validate the instance attributes
     *
     * @throws DataValidationException
     */
    public function checkIntegrity() {

        $errors = [];

        if(empty($this->firstname) || preg_match('/[!@#$%^&*(){}\[\]:;<>\.\/\+]+/', $this->firstname)) {
            $errors[] = [
                'message' => 'Invalid firstname'
            ];
        }

        if(empty($this->lastname) || preg_match('/[!@#$%^&*(){}\[\]:;<>\.\/\+]+/', $this->lastname)) {
            $errors[] = [
                'message' => 'Invalid lastname'
            ];
        }

        if(empty($this->birthday) || !preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $this->birthday)) {
            $errors[] = [
                'message' => 'Invalid birthday'
            ];
        }

        if(empty($this->gender) || !in_array($this->gender, [1, 2, 3])) {
            $errors[] = [
                'message' => 'Invalid gender'
            ];
        }

        if(!empty($errors)) {
            throw new DataValidationException($errors, 'Invalid entity');
        }

    }

}