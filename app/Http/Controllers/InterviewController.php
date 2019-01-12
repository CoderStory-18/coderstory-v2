<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Tag;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show', 'featured', 'byTags']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interviews = Interview::all();
        $selected_tags = [];
        return view('interviews.index', compact('interviews','selected_tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tag $tag)
    {
        $tags = Tag::all();
        return view('interviews.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tag $tag)
    {
        //
        $interview = Interview::create([
            'title' => request('title'), 
            'slug' => str_slug(request('title'), '-'),
            'summary' => request('summary'), 
            'body' => request('body'), 
            'featured' => 0, 
            'interview_name' => request('interview_name'),
            'interview_location' => request('interview_location'),
            'interview_profile' => request('interview_profile'),
            'twitter' => request('twitter'),
            'instagram' => request('instagram'), 
            'website' => request('website')
        ]);

        $interview->tags()->sync($request->tags, false);

        return redirect('/interviews');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview, Tag $tag)
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
        $interview->summary = request('summary');
        $interview->body = request('body');
        $interview->featured = request('featured');
        $interview->interview_name = request('interview_name');
        $interview->interview_location = request('interview_location');
        $interview->interview_profile = request('interview_profile');
        $interview->twitter = request('twitter');
        $interview->instagram = request('instagram');
        $interview->website = request('website');
        $interview->featured = request('featured');

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

     /**
     * Display a listing of the featured based on their tags.
     *
     * @return \Illuminate\Http\Response
     */
    public function byTags(Request $request)
    {
        $selected_tags = $request->get('tags') ? $request->get('tags') : [];

        $ids = Interview::all()->pluck('id')->all();
 
        foreach ($selected_tags as $selected_tag) {
            $tag = Tag::get()->where('name', $selected_tag)->first();
            $tagged_interview_ids = $tag->interviews()->pluck('id')->toArray();
            $ids = array_intersect($ids, $tagged_interview_ids);
        }
 
        $interviews = Interview::find($ids);
        return view('interviews.index', compact('interviews', 'selected_tags'));
    }


}
