<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
   public function index(){
    $title = "Table page";
    $posts = User::orderBy('id','desc')->get();
    return view('admin.main', compact('posts', 'title'));
   }
}
