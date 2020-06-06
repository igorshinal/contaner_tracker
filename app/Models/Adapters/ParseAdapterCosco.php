<?php

namespace App\Models\Adapters;

use Nesk\Rialto\Data\JsFunction;

class ParseAdapterCosco extends BaseAdapter
{
    public $adapterName = 'Cosco';
    public $url = 'https://elines.coscoshipping.com/ebusiness/';

    public function processToTracking()
    {
//        $this->page->waitForNavigation([
////            'waitUntil' => 'networkidle0'
//        ]);
        $this->page->waitFor(3000);
        $this->makeScreenshot();
//        // TODO: Implement processToTracking() method.
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }
}
