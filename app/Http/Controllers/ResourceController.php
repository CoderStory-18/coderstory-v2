<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resources = Resource::all();
        return view('resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource = Resource::create([
            'name' => request('name'), 
            'image' => request('image'), 
            'link' => request('link'), 
            'type' => request('type'),
            'promoted' => 0
        ]);

        return redirect('/resources');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Resource $resource)
    {
        $resource = Resource::where('id', $resource->id)->first();
        return view('resources.edit', compact('resource'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resource $resource)
    {
        // Find selected interview
        $resource = Resource::where('id', $resource->id)->first();

         // Update selected interview fields
         $resource->name = request('name');
         $resource->image = request('image');
         $resource->link = request('link');
         $resource->type = $resource->type;
         $resource->promoted = request('promoted');
 
         $resource->save();
        return redirect('/resources');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resource  $resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resource $resource)
    {
        Resource::where('id', $resource->id)->first()->delete();
    }

   

}
