<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use App\Models\Team;
use PhpParser\Node\Expr\New_;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('authenticated')->only('create', 'store');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->paginate(4);
        $teams = Team::has('news')->get();
        return view('pages.news', compact('news', 'teams'));
    }

    public function showNewsForTeam(string $teamName){
        $news = Team::where('name', $teamName)->first()->news()->paginate(4);
        $teams = Team::has('news')->get();
        return view('pages.news', compact('news', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('pages.createnews', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id
        ]);
        $news->teams()->attach($request->teams);

        return redirect('/news')->with('status', 'Thank you for publishing article on www.nba.com');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news  = News::find($id);
        return view('pages.singlenews', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
