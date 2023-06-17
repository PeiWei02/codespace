<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        // return response('Hellow');
        return view('learning.index')
        ->with('posts', Learning::orderBy('updated_at','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('learning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' .
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        Learning::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'image_path'=> $newImageName,
            'user_id'=> auth()->user()->id
        ]);

        return redirect('/learning')
            ->with('message','Your Post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Learning $learning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Learning $learning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Learning $learning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Learning $learning)
    {
        //
    }
}
