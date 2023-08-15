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
        $donuts = (new FileDB('donuts'))->showAll();

        return App::view('donuts/index', [
            'pageTitle' => 'Donuts index page',
            'donuts' => $donuts
        ]);
    }

    public function create()
    {
        return App::view('donuts/create', [
            'pageTitle' => 'Create new donut',
            'coating' => $this->coating,
        ]);
    }

    public function store()
    {
        $data = [
            'title' => $_POST['title'],
            'coating' => $_POST['coating'],
            'extra' => $_POST['extra'] ?? 'off',
            'description' => $_POST['description'],
            'hole' => $_POST['hole']
        ];

        (new FileDB('donuts'))->create($data);

        return App::redirect('donuts');
    }
}
