<?php

namespace App\Http\Controllers;

use App\Chess;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ChessRequest;

class ChessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chess = Chess::orderBy('id','DESC')-> paginate(10);


        return view('chess.index', compact('chess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('chess.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChessRequest $request)
    {
        Chess::create($request->all());

        return redirect()->route('chess.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(chess $chess)
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('chess.edit', compact('chess', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChessRequest $request, Chess $chess)
    {
        $chess->update($request->all());
        return redirect()->route('chess.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
