<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
class SongsController extends Controller
{
    public function show()
    {
        return view('song');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'songs_name' => 'required|string|min:3|max:32',
            'author' => 'required|string|min:6|max:32',
            'release_year' => 'required|integer',
        ]);
        
        Song::create($validatedData);
        return redirect()->route('form')->with('success', 'Form submitted successfully!');
    }
}

