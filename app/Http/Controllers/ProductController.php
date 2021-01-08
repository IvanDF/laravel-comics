<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function show($urlName)
    {
        $comics = config('dc-database');
        $comic = [];
        foreach ($comics as $el) {
            
            $urlTitle = Str::slug($el['title'], '-');
            
            if ($urlName == $urlTitle) {
                $comic = $el;
                break;
            }

        }
        if ( empty($comic) ) {
            abort(404);
        }
        
        // dd($comics);
    
        return view('product-detail', compact('comic'));
    }
}
