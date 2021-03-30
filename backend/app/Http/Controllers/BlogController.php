<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログTOPページ
     * 
     * @return View
     */
    public function index(): object
    {
        return view('blogs.index');
    }

    /**
     * ブログTOPページ
     * 
     * @param string id
     * 
     * @return View
     */
    public function show(string $id): object
    {
        return view('blogs.show');
    }
}
