<?php

namespace App\Modules\ApiPersons;

use App\Modules\ApiPersons\Model\PersonsActionsCreate;
use App\Modules\ApiPersons\Model\PersonsActionsDelete;
use App\Modules\ApiPersons\Model\PersonsActionsRetrieve;
use App\Modules\ApiPersons\Model\PersonsActionsUpdate;
use Rf\Core\Exception\DataValidationException;
use Rf\Core\Http\JsonResponse;
use Rf\Core\Mvc\Controller;

/**
 * Class ApiPersonsController
 *
 * @package App\Modules\ApiPersons
 */
class ApiPersonsController extends Controller {

    /**
     * [GET] Retrieve all persons
     */
    public function retrieveAllPersons() {

        // Get persons
        $persons = PersonsActionsRetrieve::retrieveAll();

        // Send success response
        $httpResponse = new JsonResponse(200, $persons);
        $httpResponse->send();

    }

    /**
     * [GET] Retrieve a person by ID
     */
    public function retrievePersonById() {

        try {

            // Get person ID
            $personId = rf_request_query()->get('personId');

            // Get person
            $person = PersonsActionsRetrieve::retrieveById($personId);

            // Send success response
            $httpResponse = new JsonResponse(200, $person);
            $httpResponse->send();

        } catch (\Exception $e) {

            // Send error response
            $httpResponse = new JsonResponse(500, [
                'error' => $e->getMessage()
            ]);
            $httpResponse->send();

        }

    }

    /**
     * [POST] Create a new person
     */
    public function createPerson() {

        try {

            // Get post data
            $postData = rf_request()->getPostData();

            // Get the create response
            $updateResponse = PersonsActionsCreate::create($postData);

            // Send success response
            $httpResponse = new JsonResponse(200, $updateResponse);
            $httpResponse->send();

        } catch (DataValidationException $e) {

            // Send form errors response
            $httpResponse = new JsonResponse(422, $e->getData());
            $httpResponse->send();

        } catch (\Exception $e) {

            // Send error response
            $httpResponse = new JsonResponse(500, [
                'error' => $e->getMessage()
            ]);
            $httpResponse->send();

        }

    }

    /**
     * [PUT] Update a person
     */
    public function updatePerson() {

        try {

            // Get person ID
            $personId = rf_request_query()->get('personId');

            // Get post data
            $postData = rf_request()->getPostData();

            // Get update response
            $updateResponse = PersonsActionsUpdate::update($personId, $postData);

            // Send success response
            $httpResponse = new JsonResponse(200, $updateResponse);
            $httpResponse->send();

        } catch (DataValidationException $e) {

            // Send form errors response
            $httpResponse = new JsonResponse(422, $e->getData());
            $httpResponse->send();

        } catch (\Exception $e) {

            // Send error response
            $httpResponse = new JsonResponse(500, [
                'error' => $e->getMessage()
            ]);
            $httpResponse->send();

        }

    }

    /**
     * [DELETE] Delete a person
     */
    public function deletePerson() {

        try {

            // Get person ID
            $personId = rf_request_query()->get('personId');

            // Delete the person
            PersonsActionsDelete::delete($personId);

            // Send success response
            $httpResponse = new JsonResponse(200);
            $httpResponse->send();

        } catch (\Exception $e) {

            // Send error response
            $httpResponse = new JsonResponse(500, [
                'error' => $e->getMessage()
            ]);
            $httpResponse->send();

        }

    }

}