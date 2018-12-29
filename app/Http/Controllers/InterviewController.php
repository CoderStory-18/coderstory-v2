<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show', 'featured', 'byCategories']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::all();
        $selected_categories = [];
        return view('interviews.index', compact('interviews','selected_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('interviews.create');
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
        $interview = Interview::create([
            'title' => request('title'), 
            'slug' => str_slug(request('title'), '-'),
            'body' => request('body'), 
            'featured' => 0, 
            'interview_name' => request('interview_name'),
            'interview_location' => request('interview_location'),
            'interview_profile' => request('interview_profile'),
            'twitter' => request('twitter'),
            'instagram' => request('instagram'), 
            'website' => request('website')
        ]);

        return redirect('/interviews');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
        $interview = Interview::where('slug', $interview->slug)->first();
        return view('interviews.show', compact('interview'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        //
        $interview = Interview::where('slug', $interview->slug)->first();
        return view('interviews.edit', compact('interview'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview $interview)
    {
        // Find selected interview
        $interview = Interview::where('slug', $interview->slug)->first();

        // Update selected interview fields
        $interview->title = request('title');
        $interview->slug = str_slug(request('title'), '-');
        $interview->body = request('body');
        $interview->featured = request('featured');
        $interview->interview_name = request('interview_name');
        $interview->interview_location = request('interview_location');
        $interview->interview_profile = request('interview_profile');
        $interview->twitter = request('twitter');
        $interview->instagram = request('instagram');
        $interview->website = request('website');

        $interview->save();

        return redirect('/interviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        Interview::where('slug', $interview->slug)->first()->delete();
    }

     /**
     * Display a listing of the featured interviews.
     *
     * @return \Illuminate\Http\Response
     */
    public function featured()
    {
        $interviews = Interview::where('featured', 1 )->get();
        return view('index', compact('interviews'));
    }
}
