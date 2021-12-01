<?php

namespace App\Controllers;

class Example extends BaseController
{
    public function ask()
    {
        return view('alumno');
    }

    public function pfp() {

        return view ('perfil');
    }
}
