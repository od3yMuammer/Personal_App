<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\post;
use App\Models\Process;
use App\Models\section;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::withTrashed()->get();
        return response()->view('admin.posts.index', ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $sections=Section::withoutTrashed()
        $sections = Section::all();
        return view('admin.posts.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        $post = new Post();
        $post->title = $request->input('title');
        $post->details = $request->input('details');
        $post->section_id = $request->input('section_id');

        $post->image = "";
        if ($request->hasFile('image')) {
            $image_path = time() . '.' . $request->image->extension();
            $request->image->move(public_path('post_images'), $image_path);
            $post->image = $image_path;
        }
        $isSaved = $post->save();
        if ($isSaved) {
            (new Process())->insert_log(request()->ip(), "إضافة منشور جديد", $post->id, $post->title);

            return back()
                ->with('success', 'تمت العملية بنجاح');
        } else {
            return back()
                ->with('danger', 'لم تتم العملية');
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
        $post = Post::findorFail($id);
        $sections = Section::all();
        return view('admin.posts.edit', compact('post','sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::findorFail($id);
        $post->title = $request->title;
        $post->details = $request->input('details');
        $post->section_id = $request->input('section_id');

        if ($request->hasFile('image')) {
            $image_path = time() . '.' . $request->image->extension();
            $request->image->move(public_path('post_images'), $image_path);
            $post->image = $image_path;
        }
        $post->save();
        return back()
            ->with('success', 'تمت العملية بنجاح');
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
        //$post = Post::findorFail($id);
        $post = Post::find($id);
        $post->delete();
        return back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        $post = Post::where('id', $id)->withTrashed();
        $post->forceDelete();


        return back()
            ->with('error', 'تم حذف العنصر نهائيًا');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $post = Post::withTrashed()->findorFail($id);
        $post->restore();

        return back()
            ->with('success', 'تم استعادة العنصر بنجاح');
    }
}
