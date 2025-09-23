<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function store(Request $request)
    {
        $name = $request->input('name');
        $major = $request->input('major');

        $array = [
            'name' => $name,
            'major' => $major
        ];
        dd($array);

        return view('welcome');
    }
}
