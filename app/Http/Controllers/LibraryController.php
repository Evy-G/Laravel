<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class LibraryController extends Controller
{
    public function show()
    {
        $Songs = song::all();

        return view('library', [
            'songs' => $Songs
        ]);
    }
}
