<?php

namespace App\Controllers;

class Settings extends BaseController
{
    public function index(): string
    {
        return view('pages/settings');
    }
}
