<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class ClientController extends WebController
{
    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }
    
    function liste($page = 0): string
    {
        $clients = $this->clientModele->liste(10, $page);
        return Template::render(
            "views/liste/client.php",
            array("page" => $page, "clients" => $clients)
        );
    }

    
}