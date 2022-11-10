<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $recentposts = ZsyList::orderBy('created_at', 'DESC')->get()->take(3);
        $allposts = ZsyList::all();
        $fourposts = ZsyList::orderBy('created_at', 'ASC')->get()->take(8);
//        dd($recentposts);
        return view('main.index', compact('recentposts', 'allposts', 'fourposts'));
    }
}
