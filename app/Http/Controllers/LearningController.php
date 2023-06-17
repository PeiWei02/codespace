<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LearningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' =>-['index','show']]);
    }
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
    public function show(Learning $title)
    {
        return view('learning.show')
            ->with('post', Learning::where('title', $title)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Learning $title)
    {
        return view('learning.edit')
            ->with('post', Learning::where('title', $title)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Learning $title)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        Learning::where('title', $title)
        ->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'user_id'=> auth()->user()->id
        ]);

        return redirect('/learning')
            ->with('message','Your post has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Learning $title)
    {
        $post = Learning::where('title', $title);
        $post->delete();

        return redirect('/learning')
            ->with('message','Successfully deleted!');
    }
}
