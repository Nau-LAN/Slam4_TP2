<?php

namespace routes;

use controllers\Account;
use controllers\SampleWebController;
use controllers\ClientController;
use controllers\VideoWeb;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        Route::Add('/', [$ClientController, 'liste']);
        Route::Add('/client/{id}', [$main, 'client']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

