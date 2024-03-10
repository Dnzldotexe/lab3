<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\FilmsModel;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'dtcempron')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        if ($page == 'films') {
            $model = model(FilmsModel::class);
            
            $data = [
                'title' => ucfirst($page),
                'films' => $model->getUserFilms(),
            ];

            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
        }

        else {
            $data['title'] = ucfirst($page); // Capitalize the first letter

            return view('templates/header', $data)
                . view('pages/' . $page)
                . view('templates/footer');
        }
    }
}