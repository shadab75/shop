<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class HomeCotroller extends Controller
{
    public function index()
    {
        return view('client.home',[
           'categories'=>category::query()->where('category_id',null)->get()
        ]);
   }
}
