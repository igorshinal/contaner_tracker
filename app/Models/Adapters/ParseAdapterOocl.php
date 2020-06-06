<?php
/**
 * Created by PhpStorm.
 * User: flashbag
 * Date: 29.05.20
 * Time: 16:35
 */

namespace App\Models\Adapters;

use Nesk\Rialto\Data\JsFunction;

class ParseAdapterOocl extends BaseAdapter
{
    public $adapterName = 'Yang Ming';

    public $url = 'https://www.oocl.com/eng/ourservices/eservices/cargotracking/Pages/cargotracking.aspx';

    public function processToTracking()
    {
//        $this->page->waitFor(500);

//        $this->makeScreenshot();
//        $this->page->click('button[data-id="ooclCargoSelector"]');
//
//        $this->page->waitFor(500);
//
//        $this->page->click('div.cargoTrackingDropDrown ul.dropdown-menu li[data-original-index="2"]');
//
//        $this->page->type('#SEARCH_NUMBER', $this->containerNumber, [
//            'delay' => 50
//        ]);
//
//        $this->page->waitFor(3000);


    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }
}
