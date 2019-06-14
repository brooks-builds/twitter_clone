<?php

namespace App\Http\Controllers;

use App\tweets;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = tweets::join('users', 'users.id', '=', 'tweets.user_id')
            ->select('tweets.*', 'users.name')
            ->get();

        return view('tweets.index', ['tweets' => $tweets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function show(tweets $tweets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function edit(tweets $tweets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tweets $tweets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function destroy(tweets $tweets)
    {
        //
    }
}
