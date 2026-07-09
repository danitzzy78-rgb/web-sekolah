<?php

namespace App\Controllers;

class Topbar extends BaseController
{
    public function index(): string
    {
        return view('layouts/head')
              . view('layouts/topbar');
    }
}
