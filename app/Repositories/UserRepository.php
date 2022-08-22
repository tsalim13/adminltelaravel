<?php

namespace App\Repositories;

use App\Models\User;
use App\Contracts\UserContract;

class CategoryRepository implements UserContract {

    public function getAll() {
        return User::all();
    }

    public function getById($id) {
        return User::find($id);
    }
}
