<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rank;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Rank $rank)
    {
        $categories = Category::all();
        return view('admin.ranks.show', compact('rank', 'categories'));
    }
}
