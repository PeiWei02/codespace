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
        return view('learning.index');
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
    public function store(Request $request)
    {
        //
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
