<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $topic = Topic::orderByDESC('created_at');
            $search = $request->search;
            if ($search) {
                $topic = $topic->where('title', 'like', '%'.$search.'%')
                ->orWhere('content', 'like', '%'.$request->search.'%')
                ->orWhereHas('user', function($q) use($search) {
                    $q->where('username', 'like', '%'.$search.'%');
                });
            }
            $topic = $topic->paginate(10);
            return view('pages.admin.includes.topic-list', compact('topic'));
        }
        return view('pages.admin.topic.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'title'     => ['required', 'string', 'min:3', 'max:255'], 
            'content'   => ['required', 'min:3'],
            'image'     => ['image', 'max:2048'],
        ],
        [
            'title.required'    => 'The title must be filled in!',
            'title.min'         => 'Title Must be filled in :min Characters',
            'title.max'         => 'The title should be filled with a maximum of :min characters',
            'content.required'  => 'Content must be filled in!',
            'content.min'       => 'Content must be filled with a minimum of :min characters',
            'image.max'         => 'The image must be less than :max kb'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $topic = Topic::create([
            'title'     => $request->title,
            'content'   => $request->content,
            'slug'      => Str::slug($request->title),
            'user_id'   => Auth::user()->id,
            'status'    => 1
        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext  = $file->getClientOriginalExtension();
            $newName = Str::slug($request->title).'-'.md5(uniqid(rand(), true)).$ext;
            $file->move(public_path('img/'), $newName);
            $topic->image = $newName;
            $topic->save();
        }

        if ($topic) {
            return redirect('/admin/topic')->with('success', 'Data has been successfully saved!');
        } else {
            return redirect()->back()->with('error', 'Data failed to be saved!');
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
        $topic = Topic::find($id);
        return view('pages.admin.topic.view', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::find($id);
        return view('pages.admin.topic.edit', compact('topic'));
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
        $data = $request->all();
        $topic = Topic::find($id);
        $validator = Validator::make($data, [
            'title'     => ['required', 'string', 'min:3', 'max:255'], 
            'content'   => ['required', 'min:3'],
            'image'     => ['image', 'max:2048'],
        ]);

        $topic->update($data);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext  = $file->getClientOriginalExtension();
            $newName = Str::slug($request->title).'-'.md5(uniqid(rand(), true)).$ext;
            $file->move(public_path('img/'), $newName);
            $topic->image = $newName;
            $topic->save();
        }
        if ($topic) {
            return redirect()->route('admin.topic.index')->with('success', 'Data Has Been Updated');
        } else {
            return redirect()->back()->with('error', 'Data Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::find($id);
        $path = 'img/'.$topic->image;
            if (is_file($path)) {
                unlink($path);
            }
        $topic->delete();
            return response()->json([
                'status'    => true,
            ]);
        
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function status(Request $request, $id)
    {
        $topic = Topic::find($id);
        $topic->status = $request->status;
        $topic->save();
        return response()->json([
            'status' => 1,
            'message' => 'Youre topic is updated',
        ]);
    }

    public function multiDelete (Request $request)
    {
        $topic = Topic::whereIn('id', $request->selected);
        foreach ($topic as $key => $value) {
            $path = 'img/'.$value->image;
            if (is_file($path)) {
                unlink($path);
            }
        }
        $topic->delete();
            return response()->json([
                'status'    => true,
                'message' => 'Youre topic has been deleted',
            ]);
    }
}
