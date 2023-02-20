<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class WebController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Main');
    }
}
