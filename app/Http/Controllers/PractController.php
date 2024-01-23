<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pleyer;
use App\Models\City;
use App\Models\Country;
use App\Models\Article;
use App\Models\Rubric;
use App\Models\User;
use App\Models\Profile;
use App\Models\Tag;


class PractController extends Controller
{

    // public function create(){
    //     $title = "Create page";
    //     return view('pract', compact('title')); 
    // }
    // public function store(Request $request){
    //     $this->validate($request,[
    //         'Name' => 'required|min:5|max:100',
    //         'Email' => 'required',
    //     ],
    //     [
    //         'Name.required' => "Заполните поле 'name'",
    //         'Email.required' => "Заполните поле 'email'",
            
    //         'Name.min' => "Слишком мало символов",
    //         'Name.max' => "Слишком много символов",
    //     ]);
    //     Pleyer::create($request->all());
    //     return redirect()->route('pract'); 
    // }

    public function create(){
        $title = "Create page";
        return view('pract', compact('title')); 
    }
    public function store(Request $request){
        $this->validate($request,[
            'Name' => 'required|min:5|max:100',
            'Email' => 'required',
            'Number' => 'required|integer'
        ],
        [
            'Name.required' => "Заполните поле 'Name'",
            'Email.required' => "Заполните поле 'content'",
            'Number.required' => "Заполните поле 'rubric_id'",
            'Number.integer' => "Тут могут быть только цифры",
            'Name.min' => "Слишком мало символов",
            'Name.max' => "Слишком много символов",
        ]);
        Pleyer::create($request->all());
        return redirect()->route('home'); 
    }
}