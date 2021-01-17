<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller 
{
    public function show($urlName)
    {
        $comics = config('dc-database');

        $comic = [];

        foreach ($comics as $el) {

            $slug = Str::slug($el['title'], '-');

            if ($urlName == $slug) {
                $comic = $el;
            }
        }
        
        if ( empty($comic) ) {
            abort(404);
        }

        return view('comic-detail', compact('comic'));
    }
}