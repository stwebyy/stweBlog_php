<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * TOPページ
     * 
     * @return View
     */
    public function index(): object
    {
        return view('index');
    }
}
