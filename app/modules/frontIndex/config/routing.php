<?php

return [

	// Routes for the index module

    'index_en' => [
        'pattern' => '/',
        'methods' => ['GET'],
        'controller' => 'App\Modules\FrontIndex\FrontIndexController',
        'action' => 'renderIndex',
        'defaults' => [
            'language' => 'en',
        ]
    ],
	
];