<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $like = Like::where('user_id', Auth::user()->id)
            ->with(['topic' => function($q) {
                return $q->withCount('response');
            }])
            ->orderBy('id', 'DESC')
            ->paginate(5);
            return view('pages.includes.liked-list', compact('like'));
        }
        return view('pages.liked');
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
        $like = Like::where('user_id', $request->user_id)
            ->where('topic_id', $request->topic_id)
            ->first();
        if ($like) {
            $like->delete();
            return response()->json([
                'status' => 0,
                'message' => 'You Unliked this Topic',
            ]);
        } else {
            $like = Like::create([
                'user_id' => $request->user_id,
                'topic_id' => $request->topic_id,
            ]);
            return response()->json([
                'status' => 1,
                'message' => 'You liked this Topic',
            ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
