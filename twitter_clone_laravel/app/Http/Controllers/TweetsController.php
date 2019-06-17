<?php

namespace App\Http\Controllers;

use App\tweets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            ->orderBy('created_at', 'desc')
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
        if (!Auth::check())
        {
            return redirect('/login');
        }

        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check())
        {
            return redirect('/login');
        }

        $request->validate([
            'text' => 'required|max:25'
        ]);

        tweets::create([
            'text' => $request->text,
            'user_id' => 1
        ]);

        return redirect('/tweets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet = tweets::find($id);
        return view('tweets.show', ['tweet' => $tweet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = tweets::find($id);

        return view('tweets.edit', ['tweet' => $tweet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tweets  $tweets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|max:25'
        ]);

        $tweet = tweets::find($id);
        $tweet->text = $request->text;
        $tweet->save();

        return redirect("/tweets/$id");
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
