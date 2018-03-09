<?php

namespace App\Modules\FrontIndex\Model;

/**
 * Class FrontIndexDictionary
 *
 * @package App\Modules\FrontIndex\Model
 */
abstract class FrontIndexDictionary {

	/**
	 * Build the dictionary
	 *
	 * @return array
	 */
    public static function get() {

	    $dictionary = [];

	    $dictionary['name'] = 'Rivera Framework';

        return $dictionary;
        
    }

}