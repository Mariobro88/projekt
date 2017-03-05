<?php

namespace App\Http\Controllers;

use App\Category;
use App\Chess;
use App\Http\Requests\PhotosRequest;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dane = Photo::orderBy('id','DESC')-> paginate(10);


        return view('photos.index', compact('dane'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Chess::all()->pluck('name', 'id');
        return view('photos.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotosRequest $request)
    {
        $file = array('image' => Input::file('name'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect()->route('photos.create')->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('name')->isValid()) {
                $destinationPath = 'upload'; // upload path
                $extension = Input::file('name')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('name')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message

                Photo::create([
                    'chess_id'=>$request->input('chess_id'),
                    'name'=>$fileName,
                    'description'=>$request->input('description'),
                ]);
                return redirect()->route('photos.index');
            }
            else {
                // sending back with error message.

                return redirect()->route('photos.create')->withInput()->withErrors($validator);
            }
        }
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
     * @param  Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        $categories = Chess::all()->pluck('name', 'id');
        return view('photos.edit', compact('photo','categories'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PhotosRequest  $request
     * @param  Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(PhotosRequest $request, Photo $photo)
    {
        $file = array('image' => Input::file('name'));
        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect()->route('photos.create')->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('name')->isValid()) {
                $destinationPath = 'upload'; // upload path
                $extension = Input::file('name')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('name')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message

                Photo::create([
                    'chess_id'=>$request->input('chess_id'),
                    'name'=>$fileName,
                    'description'=>$request->input('description'),
                ]);
                return redirect()->route('photos.index');
            }
            else {
                // sending back with error message.

                return redirect()->route('photos.create')->withInput()->withErrors($validator);
            }
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
       $photo->delete();
       return redirect()->route('photos.index');
    }
}
