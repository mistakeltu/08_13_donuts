<?php

namespace Donuts\Controllers;

use Donuts\App;
use Donuts\DB\FileDB;

class DonutsController
{
    private $coating = [
        ['id' => 1, 'title' => 'Chocolate', 'color' => 'brown'],
        ['id' => 2, 'title' => 'Caramel', 'color' => 'darksalmon'],
        ['id' => 3, 'title' => 'Blueberry', 'color' => 'blue'],
        ['id' => 4, 'title' => 'Strawberry', 'color' => 'red'],
    ];


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
