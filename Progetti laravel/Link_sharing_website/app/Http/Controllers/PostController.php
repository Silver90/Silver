<?php

namespace angleslash\Http\Controllers;

use Illuminate\Http\Request;

use angleslash\Http\Requests;
use angleslash\Http\Controllers\Controller;
use angleslash\Sub;
use angleslash\Post;
use angleslash\PostVote;
use angleslash\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($sub, $postId)
    {
        $sub = Sub::where('name', $sub)->firstOrFail();
        $post = Post::find($postId);

        return view('post')
            ->with('title', $post->title)
            ->with('sub', $post->sub->name)
            ->with('post', $post);
    }

    public function frontpage()
    {
        return view('sub')
            ->with('title', 'Front Page')
            ->with('posts', Post::paginate(15));
    }

    public function displayform()
    {
        return view('forms.submit')
            ->with('title', 'New Post');
    }

    public function storepost(PostFormRequest $request)
    {
        $post = new Post;

        $post->title = $request->get('title');
        $post->url = $request->get('url');
        $post->sub_id = Sub::where('name', $request->get('sub'))->first()->id;
        $post->user_id = \Auth::id();
        $post->save();

        return \Redirect::to('/');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
