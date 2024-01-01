<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function geraMyHome ( Request $request) {
        $data = $request ->all();
        return view ('myhomeView',['mydata' => $data['email'], 'mypass' => $data['password']]);
    }
}
