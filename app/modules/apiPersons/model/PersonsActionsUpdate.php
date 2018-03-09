<?php

namespace App\Modules\ApiPersons\Model;

use App\Entities\Classes\C_default\Person;
use Rf\Core\Base\ParameterSet;
use Rf\Core\Exception\DataValidationException;

/**
 * Class PersonsActionsUpdate
 *
 * @package App\Modules\ApiPersons\Model
 */
abstract class PersonsActionsUpdate {

    /**
     * Update a person
     *
     * @param int $personId
     * @param ParameterSet $postData
     *
     * @return array
     * @throws DataValidationException
     * @throws \Exception
     */
    public static function update($personId, ParameterSet $postData) {

        // Create the person entity
        $person = Person::findFirstBy('id = ' . $personId);

        if(!$person) {
            throw new \Exception('Person not found for this ID');
        }

        $person->setFirstname($postData->get('firstname'));
        $person->setLastname($postData->get('lastname'));
        $person->setGender($postData->get('gender'));
        $person->setBirthday($postData->get('birthday'));
        $person->setUpdatedAt(rf_date('sql'));

        // Check and save in database
        $person->checkIntegrity();
        $person->save();

        return $person->toArray();

    }

}