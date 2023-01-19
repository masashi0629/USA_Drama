<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Genre;
use App\Models\BroadcastTime;
use App\Models\UsaBroadcaster;
use App\Models\Acotor_Work;
use App\Models\Vactor_Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ランダム作品表示
        $works = Work::inRandomOrder()->take(4)->get();

        $genres = Genre::orderBy('genre_name','asc')->get();
        $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
        $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
        return view('works/index',compact('works','genres','broadcast_times','usa_broadcasters'));

    }


    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show($work)
    {
        $genres = Genre::orderBy('genre_name','asc')->get();
        $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
        $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
        $showworks = Work::find($work);
        $actors = Work::find($work)->actors()->get();
        $voice_actors = Work::find($work)->vactors()->get();
        return view('works.show',compact('showworks','actors','voice_actors','genres','broadcast_times','usa_broadcasters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        $category = $request->input('category');
        $genres = Genre::orderBy('genre_name','asc')->get();
        $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
        $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
        if($request->category == 'work'){
            $query = Work::query();
             $query->where('work_name', 'LIKE', "%{$keyword}%");
        }
        elseif ($request->category == 'actor') {
            $query = Work::query();
            $query->whereHas('actors', function ($q) use($keyword) {
                $q->where('actor_name','LIKE', "%{$keyword}%");
            });
        }
        else {
            $query = Work::query();
            $query->whereHas('vactors', function ($q) use($keyword) {
                $q->where('voice_actor_name','LIKE', "%{$keyword}%");
            });
        }
         $works = $query->get();
         return view('works/index',compact('works','keyword','genres','broadcast_times','usa_broadcasters'));
    }

    public function genre(string $genre){
    $works = Genre::find($genre)->works()->get();
    $genres = Genre::orderBy('genre_name','asc')->get();
    $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
    $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
    return view('works/index',compact('works','genres','broadcast_times','usa_broadcasters'));
    }

    public function broadcast_time(string $broadcast_time){
    $works = BroadcastTime::find($broadcast_time)->works()->get();
    $genres = Genre::orderBy('genre_name','asc')->get();
    $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
    $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
    return view('works/index',compact('works','genres','broadcast_times','usa_broadcasters'));
    }

    public function usa_broadcaster(string $usa_broadcaster){
    $works = UsaBroadCaster::find($usa_broadcaster)->works()->get();
    $genres = Genre::orderBy('genre_name','asc')->get();
    $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
    $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();
    return view('works/index',compact('works','genres','broadcast_times','usa_broadcasters'));
    }

}
