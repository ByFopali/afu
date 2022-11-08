<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Models\Rank;
use App\Models\Category;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $categories = Category::all();
        $ranks = Rank::all();
        return view('admin.ranks.index', compact('ranks'));
    }
}
