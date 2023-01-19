<?php

namespace App\Http\View\Composers;
namespace App\Http;

use Illuminate\View\View;
use App\Models\Work;
use App\Models\Genre;
use App\Models\BroadcastTime;
use App\Models\UsaBroadcaster;
use App\Models\Acotor_Work;
use App\Models\Vactor_Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestComposer
{
    public function compose(View $view)
    {
        $genres = Genre::orderBy('genre_name','asc')->get();
        $broadcast_times = BroadcastTime::orderBy('age_group','asc')->get();
        $usa_broadcasters = UsaBroadcaster::orderBy('broadcaster_name','asc')->get();

        $view->with(['genres'=>$genres,'broadcast_times'=>$broadcast_times,'usa_broadcasters'=>$usa_broadcasters]);
    }
}
