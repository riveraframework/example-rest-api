<?php

namespace App\Modules\ApiPersons\Model;

use App\Entities\Classes\C_default\Person;
use Rf\Core\Base\ParameterSet;
use Rf\Core\Exception\DataValidationException;

/**
 * Class PersonsActionsCreate
 *
 * @package App\Modules\ApiPersons\Model
 */
abstract class PersonsActionsCreate {

	/**
	 * Create a new person
	 *
	 * @param ParameterSet $postData
	 *
	 * @return array
     * @throws DataValidationException
     * @throws \Exception
	 */
    public static function create(ParameterSet $postData) {

        // Create the person entity
        $person = new Person();
        $person->setFirstname($postData->get('firstname'));
        $person->setLastname($postData->get('lastname'));
        $person->setGender($postData->get('gender'));
        $person->setBirthday($postData->get('birthday'));
        $person->setCreatedAt(rf_date('sql'));

        // Check and save in database
        $person->checkIntegrity();
        $person->save();

        return $person->toArray();

    }
    
}