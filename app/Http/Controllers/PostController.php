<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => "required"
        ]);

        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file_path = $file->storeAs('uploads', $file_name);

        if (Post::create([
            'name' => $file_name,
            'path' => $file_path,
        ])) {
            return redirect()->route('form.page')->with('alert', 'Sudah masuk ke database');
        } else {
            return redirect()->route('form.page')->with('alert', 'Gagal memasukan ke database');
        }
    }
}