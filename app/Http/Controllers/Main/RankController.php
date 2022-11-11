<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rank;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class RankController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $recentposts = ZsyList::orderBy('created_at', 'DESC')->get()->take(3);
        $allposts = Rank::all();
//        dd($recentposts);
        return view('main.ranks', compact('recentposts', 'allposts', 'categories'));
    }
}
