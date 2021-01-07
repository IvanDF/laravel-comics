<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $comics = config('dc-database');
        $comic = [];
        foreach ($comics as $el) {
            if ($id == $el['id']) {
                $comic = $el;
            }
            
        }
        // dd($comics);
    
        return view('product-detail', compact('comic'));
    }
}
