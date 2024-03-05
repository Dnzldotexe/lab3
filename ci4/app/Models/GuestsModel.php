<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
    protected $table = 'myguests';

    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];

    public function getGuests($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['name' => $name])->first();
    }
}
