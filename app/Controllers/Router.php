<?php

namespace App\Controllers;

class Router extends BaseController
{
    public function alumno()
    {
        return view('alumno');
    }

    public function profesor()
    {
        return view('profesor');
    }
}