<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class welcomeController extends Controller
{
    public function welcome() {
        $cards = json_decode('[{
            "id": 1,
            "name": "a",
            "class": "class1"
        }, {
            "id": 2,
            "name": "b",
            "class": "class2"
        }]');


        return view('welcome', compact('cards'));
    }
}
