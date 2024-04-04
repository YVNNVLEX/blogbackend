<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\articles;
class articlesController extends Controller
{
    public function store(Request $request){

    $article = articles::create([
        'title' => $request->title,
        'desc' => $request->desc,
    ]);
    return $article;
    
}

    public function list(){
        return articles::all();
    }
}
