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

        helper('form');
        $model = model(FilmsModel::class);
            
        $data = [
            'title' => ucfirst($page),
            'films' => $model->getUserFilms(),
        ];

        return view('templates/header', $data)
            . view('pages/' . $page, $data)
            . view('templates/footer');
        // if ($page == 'films') {
        //     $model = model(FilmsModel::class);
            
        //     $data = [
        //         'title' => ucfirst($page),
        //         'films' => $model->getUserFilms(),
        //     ];

        //     return view('templates/header', $data)
        //         . view('pages/' . $page)
        //         . view('templates/footer');
        // }

        // else {
        //     helper('form');

        //     $data['title'] = ucfirst($page); // Capitalize the first letter
            
        //     return view('templates/header', $data)
        //         . view('pages/' . $page)
        //         . view('templates/footer');
        // }
    }

    public function create() {
        helper('form');

        $data = $this->request->getPost(['title', 'userName', 'filmOne', 'filmTwo', 'filmThree', 'filmFour', 'posterOne', 'posterTwo', 'posterThree', 'posterFour']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'title' => 'required|max_length[128]|min_length[3]',
            'userName'  => 'required|max_length[128]|min_length[3]',
            'filmOne'  => 'required|max_length[128]|min_length[3]',
            'filmTwo'  => 'required|max_length[128]|min_length[3]',
            'filmThree'  => 'required|max_length[128]|min_length[3]',
            'filmFour'  => 'required|max_length[128]|min_length[3]',
            'posterOne'  => 'required|max_length[2048]|min_length[10]',
            'posterTwo'  => 'required|max_length[2048]|min_length[10]',
            'posterThree'  => 'required|max_length[2048]|min_length[10]',
            'posterFour'  => 'required|max_length[2048]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->view();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(FilmsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'userName'  => $post['userName'],
            'filmOne'  => $post['filmOne'],
            'filmTwo'  => $post['filmTwo'],
            'filmThree'  => $post['filmThree'],
            'filmFour'  => $post['filmFour'],
            'posterOne'  => $post['posterOne'],
            'posterTwo'  => $post['posterTwo'],
            'posterThree'  => $post['posterThree'],
            'posterFour'  => $post['posterFour'],
        ]);

        $data = [
            // 'title' => ucfirst($page),
            'films' => $model->getUserFilms(),
        ];

        return view('templates/header', ['title' => 'Films'])
        . view('pages/films', $data)
        . view('templates/footer');
    }
}