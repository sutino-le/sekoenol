<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminLevel extends BaseController
{
    public function index()
    {
        return view('admin/level/index');
    }
}
