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

    public function administrador()
    {
        return view('administrador');
    }

    public function encargado()
    {
        return view('encargado');
    }
}