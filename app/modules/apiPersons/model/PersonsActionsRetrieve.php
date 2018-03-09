<?php

namespace App\Modules\ApiPersons\Model;

use App\Entities\Classes\C_default\Person;

/**
 * Class PersonsActionsDelete
 *
 * @package App\Modules\ApiPersons\Model
 */
abstract class PersonsActionsRetrieve {

    /**
     * Retrieve all persons
     *
     * @return array
     */
    public static function retrieveAll() {

        $persons = Person::select()
            ->toArrayAssoc(true);

        return $persons;

    }

    /**
     * Retrieve a person
     *
     * @param int $personId
     *
     * @return array
     * @throws \Exception
     */
    public static function retrieveById($personId) {

        // Create the person entity
        $person = Person::findFirstBy('id = ' . $personId);

        if(!$person) {
            throw new \Exception('Person not found for this ID');
        }

        return $person->toArray();

    }

}