<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layouts/head')
            . view('layouts/topbar')
            . view('layouts/header')
            . view('layouts/navbar')
            . view('home');
    }
}