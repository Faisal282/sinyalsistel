<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistelController extends Controller
{
    public function sinyalView()
    {
        return view('sistel.sinyal');
    }
    public function sinyalStore(Request $request)
    {
        $this->validate($request, [
            'value' => 'required|integer|digits_between:0,10'
        ]);
        $array = array_map('intval', str_split($request->value));
        $array = join(", ", $array);
        return view('sistel.sinyalhasil', compact('array'));
    }
}
