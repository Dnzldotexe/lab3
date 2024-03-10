<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmsModel extends Model
{
    protected $table = 'userfilms';

    protected $allowedFields = ['title', 'slug', 'userName', 'filmOne', 'filmTwo', 'filmThree', 'filmFour', 'posterOne', 'posterTwo', 'posterThree', 'posterFour'];

    public function getUserFilms($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
