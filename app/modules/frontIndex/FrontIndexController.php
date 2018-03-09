<?php

namespace App\Modules\FrontIndex;

use App\Modules\FrontIndex\Model\FrontIndexDictionary;
use Rf\Core\Mvc\Controller;

/**
 * Class FrontIndexController
 *
 * @package App\Modules\FrontIndex
 */
class FrontIndexController extends Controller {
    
    public function renderIndex() {

        // Get dictionary
        $this->dictionary = FrontIndexDictionary::get();

        // Render the template
	    $this->render('index');

    }

    public function partialHeader() {

        $this->loadTemplate('partials:header');

    }

    public function partialFooter() {

        $this->loadTemplate('partials:footer');

    }

}