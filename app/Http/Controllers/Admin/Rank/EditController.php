<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rank;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Rank $rank)
    {

//
//        $rank = Rank::all();
        $categories = Category::all();
        return view('admin.ranks.edit', compact('rank', 'categories'));
    }
}
