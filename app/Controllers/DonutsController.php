<?php

namespace Donuts\Controllers;

use Donuts\App;
use Donuts\DB\FileDB;

class DonutsController
{
    public function index()
    {
        $c = new FileDB();

        return App::view('donuts/index', [
            'pageTitle' => 'Donuts index page',
        ]);
    }
}
