<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateForumRequest;
use App\Models\Forum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;


class ForumController extends Controller
{
    //automatically called when the controller is instantiated, perform initialization tasks or define middleware
    public function __construct()
    {
        //'auth' middleware will be applied to the specified actions ('create' and 'store')
        $this->middleware('auth')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('forum.index', [
            'forums' => Forum::paginate(5)
        ]);
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
    public function store(CreateForumRequest $request, Forum $forums)
    {
        $forum = auth()->user()->forum()->create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'channel_id' => $request->input('channel'),
            'slug' => Str::slug($request->input('title'))
        ]);

        session()->flash('success', 'Forum posted');

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
