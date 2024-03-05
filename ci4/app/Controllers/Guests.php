<?php

namespace App\Controllers;

use App\Models\GuestsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestsModel::class);

        $data = [
            'guests'  => $model->getGuests(),
            'name' => 'Guests archive',
        ];

        return view('templates/header', $data)
            . view('guests/index')
            . view('templates/footer');
    }

    public function show($name = null)
    {
        $model = model(GuestsModel::class);

        $data['guests'] = $model->getGuests($name);

        if (empty($data['guests'])) {
            throw new PageNotFoundException('Cannot find the guests item: ' . $name);
        }

        $data['name'] = $data['guests']['name'];

        return view('templates/header', $data)
            . view('guests/view')
            . view('templates/footer');
    }

    public function new()
    {
        helper('form');

        return view('templates/header', ['name' => 'Create a guests item'])
            . view('guests/create')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'email', 'website', 'comment']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[5000]|min_length[10]',
            'website'  => 'required|max_length[5000]|min_length[10]',
            'comment'  => 'required|max_length[5000]|min_length[10]',
            // 'gender'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(GuestsModel::class);

        $model->save([
            'name'  => url_title($post['name'], '-', true),
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            // 'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['name' => 'Create a guests item'])
            . view('guests/success')
            . view('templates/footer');
    }
}