<?php

namespace App\Contracts;

interface UserContract
{
    public function getAll();

    public function getById($id);
}
