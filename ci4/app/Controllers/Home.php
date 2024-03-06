<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function dtcempron(): string
    {
        return view('templates/header')
            . view('Views/pages/dtcempron')
            . view('templates/footer');
    }
}
