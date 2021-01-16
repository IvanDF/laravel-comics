<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('dc-database');

        foreach ($comics as $key => $el) {
            
            $urlName = Str::slug($el['title'], '-');

            $comics[$key]['urlName'] = $urlName;
        }

        return view('home', compact('comics'));
    } 
}