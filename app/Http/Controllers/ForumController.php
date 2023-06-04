<?php

namespace App\Http\Controllers;

use App\Models\Forum\Forum;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDiscussionrequest;

class ForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('forum.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDiscussionRequest $request)
    {
        // Create a new instance of the Forum model
        $forum = new Forum();
    
        // Assign values from the request to the model attributes
        $forum->title = $request->input('title');
        $forum->content = $request->input('content');
        $forum->channel_id = $request->input('channel');
        $forum->slug = $request->input('title');
    
        // Save the model to the database
        $forum->save();
    
        // Flash a success message to the session
        session()->flash('success', 'Discussion posted');
    
        // Redirect to the forum.index route
        return redirect()->route('forum.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
