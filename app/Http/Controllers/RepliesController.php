<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReplyRequest;
use App\Models\Forum\Forum;
use Illuminate\Http\Request;
use App\Models\Reply;

class RepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Forum $forum)
    {
        // Get the authenticated user's ID
        $user_id = auth()->user()->id;

        // Create a new instance of the Reply model
        $reply = new Reply();

        // Assign values from the request to the model attributes
        $reply->content = $request->input('content');
        $reply->forum_id = $forum->id;
        $reply->user_id = $user_id;

        // Save the model to the database
        $reply->save();

        session()->flash('success', 'Reply added');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
