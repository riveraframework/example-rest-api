<?php

namespace App\Modules\ApiPersons\Model;

use App\Entities\Classes\C_default\Person;

/**
 * Class PersonsActionsDelete
 *
 * @package App\Modules\ApiPersons\Model
 */
abstract class PersonsActionsDelete {

    /**
     * Delete a person
     *
     * @param int $personId
     *
     * @throws \Exception
     */
    public static function delete($personId) {

        // Create the person entity
        $person = Person::findFirstBy('id = ' . $personId);

        if(!$person) {
            throw new \Exception('Person not found for this ID');
        }

        $person->remove();

    }

}