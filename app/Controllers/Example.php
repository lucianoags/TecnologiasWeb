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

    public function modificar() {

        return view ('modificarCuenta');
    }
}
