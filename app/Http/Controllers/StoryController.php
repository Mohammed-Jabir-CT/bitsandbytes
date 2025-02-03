<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Identity;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('identity')) {
            $query = Story::select('id', 'title', 'genre_id', 'body', 'views', 'created_at')
                ->where('identity_id', $request->identity)
                ->with('genre:id,name');

            if ($request->has('genre')) {
                $query->where('genre_id', $request->genre);
            }

            if ($request->has('sort_by')) {
                switch ($request->sort_by) {
                    case 'latest':
                        $query->latest();
                        break;
                    case 'popular':
                        $query->orderByDesc('views');
                        break;
                        // case 'trending':
                        // break;
                    default:
                        $query->latest();
                        break;
                }
            } else {
                $query->latest();
            }

            $stories = $query->paginate(10)->withQueryString();
            $genres = Genre::where('identity_id', $request->identity)->pluck('name', 'id');
        } else {
            return redirect('/');
        }
        return view('stories.index', [
            'identity' => $request->identity,
            'stories' => $stories,
            'genres' => $genres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $identities = Identity::pluck('name', 'id');
        return view('stories.create', [
            'identities' => $identities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $story = new Story();
        $story->title = $request->title;
        $story->identity_id = $request->identity;
        $story->genre_id = $request->genre;
        $story->body = $request->body;
        $story->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        return view('stories.show', ['story' => $story]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        //
    }
}
