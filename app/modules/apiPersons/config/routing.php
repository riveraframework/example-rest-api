<?php

return [

	// Routes for the API persons module

    'persons_retrieve_all_en' => [
        'pattern' => '/persons',
        'methods' => ['GET'],
        'controller' => 'App\Modules\ApiPersons\ApiPersonsController',
        'action' => 'retrieveAllPersons',
        'defaults' => [
            'language' => 'en',
        ]
    ],

    'persons_retrieve_id_en' => [
        'pattern' => '/persons/{personId}',
        'methods' => ['GET'],
        'controller' => 'App\Modules\ApiPersons\ApiPersonsController',
        'action' => 'retrievePersonById',
        'defaults' => [
            'language' => 'en',
        ]
    ],

    'persons_create_en' => [
        'pattern' => '/persons',
        'methods' => ['POST'],
        'controller' => 'App\Modules\ApiPersons\ApiPersonsController',
        'action' => 'createPerson',
        'defaults' => [
            'language' => 'en',
        ]
    ],

    'persons_update_en' => [
        'pattern' => '/persons/{personId}',
        'methods' => ['PUT'],
        'controller' => 'App\Modules\ApiPersons\ApiPersonsController',
        'action' => 'updatePerson',
        'defaults' => [
            'language' => 'en',
        ]
    ],

    'persons_delete_en' => [
        'pattern' => '/persons/{personId}',
        'methods' => ['DELETE'],
        'controller' => 'App\Modules\ApiPersons\ApiPersonsController',
        'action' => 'deletePerson',
        'defaults' => [
            'language' => 'en',
        ]
    ],
	
];