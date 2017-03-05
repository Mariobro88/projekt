<?php

namespace App\Http\Controllers;

use App\Category;
use App\Chess;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('main.index',compact('categories'));
    }

    public function chess ($slag)
    {
        $chess = Category::where('slag',$slag)->first()->chess()->get();

        return view('main.chess',compact('chess'));
    }

    public function show($id)
    {
        $chess = Chess::whereId($id)->first();
        return view('main.show',compact('chess'));

    }

    public function contact()
    {
        return view('main.contact');
    }

}
