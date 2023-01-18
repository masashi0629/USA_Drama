<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class TestComposer
{
    public function compose(View $view)
    {
        $view->compact('genres', '$genre->genre_name');
    }
}
