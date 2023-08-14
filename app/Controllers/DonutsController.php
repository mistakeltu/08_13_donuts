<?php

namespace Donuts\Controllers;

use Donuts\App;
use Donuts\DB\FileDB;

class DonutsController
{
    public function index()
    {
        $c = new FileDB('donuts');

        return App::view('donuts/index', [
            'pageTitle' => 'Donuts index page',
        ]);
    }

    public function create()
    {
        return App::view('donuts/create', [
            'pageTitle' => 'Create new donut',
        ]);
    }
}
