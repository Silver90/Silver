<?php

namespace angleslash\Http\Controllers;

use Illuminate\Http\Request;
use angleslash\PostVote;
use angleslash\Http\Requests;
use angleslash\Http\Controllers\Controller;

class VoteController extends Controller
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

    public function vote()
    {
        $class = \Input::get('class');
        $postId = \Input::get('postId');
        $previousVote = PostVote::where('user_id', \Auth::id())->where('post_id', $postId)->first();
        $isUpvote = str_contains($class, 'up');

        if (!is_null($previousVote)) {
            if (isUpvote) {
                if ($previousVote->type === 'up') {
                    $previousVote->delete();
                } else {
                    $previousVote->update(['type' => 'up']);
                }
            } else {
                if ($previousVote->type === 'down') {
                    $previousVote->delete();
                } else {
                    $previousVote->update(['type' => 'down']);
                }
            }
        } else {
            PostVote::create([
                'type' => $isUpvote ? 'up' : 'down',
                'user_id' => \Auth::id(),
                'post_id' => $postId
            ]);
        }
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
    public function show($id)
    {
        //
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
