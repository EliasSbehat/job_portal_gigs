<?php

namespace App\Models;

class Listing{
    public static function all(): array{
        return [
            [
                'id' => "1",
                'title' => "Gig 1 Title",
                'author' => "@abdel"
            ],
            [
                'id' => "2",
                'title' => "Gig 2 Title",
                'author' => "@abdel"
            ],
            [
                'id' => "3",
                'title' => "Gig 3 Title",
                'author' => "@abdel"
            ],
        ];
    }
}
