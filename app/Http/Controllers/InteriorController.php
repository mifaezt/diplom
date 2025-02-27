<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteriorController extends Controller
{
    public function show()
    {
        $interiorImages = [
            [
                'url' => 'images/interior/1.jpg',
                'description' => 'Уютная гостиная с камином и мягкими креслами.'
            ],
            [
                'url' => 'images/interior/2.jpg',
                'description' => 'Спальня с деревянной кроватью и большими окнами.'
            ],
            [
                'url' => 'images/interior/3.jpg',
                'description' => 'Кухня с современной техникой и обеденной зоной.'
            ],
            [
                'url' => 'images/interior/4.jpg',
                'description' => 'Ванная комната с душевой кабиной и стильным дизайном.'
            ],
            [
                'url' => 'images/interior/5.jpg',
                'description' => 'Терасса с видом на природу и удобными креслами.'
            ]
        ];

        return view('interior', compact('interiorImages'));
    }
}