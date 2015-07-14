<?php

namespace angleslash\Http\Controllers;

use Illuminate\Http\Request;
use angleslash\Http\Requests\SubFormRequest;
use angleslash\Http\Requests;
use angleslash\Http\Controllers\Controller;
use angleslash\Sub;

class SubController extends Controller
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
    public function show($name)
    {
        $sub = Sub::where('name', $name)->firstOrFail();

        return view('sub')
            ->with('sub', $sub->name)
            ->with('posts', $sub->posts()->paginate(15));
    }

    public function displayform()
    {
        return view('forms.createsub')
            ->with('title', 'Create Sub');
    }

    public function storesub(SubFormRequest $request)
    {
        $sub = new Sub;
        $sub->name = $request->get('name');
        $sub->owner_id = \Auth::id();
        $sub->save();

        return \Redirect::to('r/' . $request->get('name'));
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
