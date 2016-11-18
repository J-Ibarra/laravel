<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class token extends Controller
{
    
    function csrf_token()
    {
        $session = app('session');

        if (isset($session)) {
            return $session->getToken();
        }

        return 'Application session store not set.';
    }


}
