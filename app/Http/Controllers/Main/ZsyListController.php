<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Rank;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class ZsyListController extends Controller
{
    public function __invoke()
    {
        $recentposts = ZsyList::orderBy('created_at', 'DESC')->get()->take(3);
        $allposts = ZsyList::all();
//        dd($recentposts);
        return view('main.zsylists', compact('recentposts', 'allposts'));
    }
}
