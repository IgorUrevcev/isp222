<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return view('pages/show');
    }
    // public function showAll($id)
    // {
    //     $Name = 'Name';
    //     return view('pages/all', compact('Name', 'id'));

    // }
    public function showAll($id)
    {
        $types = [
            1 => 'page1',
            2 => 'page2',
            3 => 'page3',
            4 => 'page4',
            5 => 'page5',
        ];
        return view('pages/all', ['type' => $types[$id]]);

    }
}
