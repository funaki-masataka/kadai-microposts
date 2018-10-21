<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriateController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->favoriate($id);
        return redirect()->back();
    }

    public function destroy($id)
    {
        \Auth::user()->unfavoriate($id);
        return redirect()->back();
    }
}
