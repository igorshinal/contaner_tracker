<?php

namespace App\Models\Adapters;

use Nesk\Rialto\Data\JsFunction;

class ParseAdapterMaersk extends BaseAdapter
{
    public $url = 'https://www.maersk.com';

    public function openPage()
    {
        parent::openPage();

        // Get the "viewport" of the page, as reported by the page.
        $cookiesModalIsHidden = $this->page->evaluate(JsFunction::createWithBody("
        
            console.log('checking cookies modal');
        
            overlay = document.getElementById('coiOverlay');
            

            return overlay.getAttribute('style') === 'display: none;';
            
        "));

        if ($cookiesModalIsHidden) {

            $this->page->click('button.coi-banner__accept');

        }

        $this->page->waitForNavigation([
//            'timeout' => 2000
        ]);

        $this->page->screenshot(['path' => 'example.png']);

//        $buttonTrack = $this->page->querySelector('#ign-navbar > ul.ign-header__buttons li button[data-id="header-track"]');

//        $this->page->evaluate(JsFunction::createWithBody("
//
//            console.log('getting header menu');
//
//            menu = document.getElementsByClassName('ign-header__buttons')[0];
//
//            buttons = menu.getElementsByTagName('button');
//
//            return buttons;
//
//            for (var k in buttons) {
//                if (buttons.hasOwnProperty(k)) {
//                    button = buttons[k];
//
//                    if (button.getAttribute('data-id') === 'header-track') {
//                        button.click();
//                    }
//                }
//            }
//
//
//
//        "));

        $this->page->screenshot(['path' => 'example.png']);

        dd('$cookiesModalIsHidden', $cookiesModalIsHidden);

    }
}
