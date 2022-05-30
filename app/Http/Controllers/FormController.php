<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FormController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        $img = Storage::put('uploads', $data['img']);
    }
}
