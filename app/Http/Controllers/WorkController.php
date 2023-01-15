<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

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
        $works = Work::inRandomOrder()->take(3)->get();
        return view('works/index',compact('works'));

    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function header()
    {
        $works = Work::paginate(20);
        // 検索フォームで入力された値を取得
       $search = $request->input('search');
       $query = Work::query();
       if ($search) {
           // 全角スペースを半角に変換
           $spaceConversion = mb_convert_kana($search, 's');
           // 単語を半角スペースで区切り、配列にする
           $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
           // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
           foreach($wordArraySearched as $value) {
           $query->where('$work->work_name', 'like', '%'.$value.'%');
       }
       $works = $query->paginate(20);
        return view('works.header')
        ->with([
           'works' => $users,
           'search' => $search,
       ]);
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
        $showworks = Work::find($work);
        $actors = Work::find($work)->actors()->get();
        $voice_actors = Work::find($work)->vactors()->get();
        return view('works.show',compact('showworks','actors','voice_actors'));
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
}
