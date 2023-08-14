<?php

namespace Donuts\DB;

use App\DB\DataBase;

class FileDB implements DataBase
{
    // function create(array $userData): void;
    // function update(int $userId, array $userData): void;
    // function delete(int $userId): void;
    // function show(int $userId): array;
    // function showAll(): array;

    private $file, $data;

    public function __construct($fileName)
    {
        $this->file = ROOT . 'data/' . $fileName . '.json';

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
        $this->data = json_decode(file_get_contents($this->file), 1);
    }

    public function create(array $data): void
    {
        $this->data[] = $data;
    }
}
