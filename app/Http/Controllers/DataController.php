<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data(Request $request){
        return $request;
    }
}
