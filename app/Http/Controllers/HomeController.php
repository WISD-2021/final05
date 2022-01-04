<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function home(){
        $data = DB::table('products')->where('id', '<=', 8)->get();
        return view('home', ['product' => $data]);

    }
}
