<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function dtcempron($page = 'dtcempron'): string
    {
            helper('form');

            $data['title'] = ucfirst($page); // Capitalize the first letter
            
            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
    }
}
