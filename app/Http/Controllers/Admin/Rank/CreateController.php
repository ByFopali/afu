<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rank;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $ranks = Rank::all();
        return view('admin.ranks.create', compact('ranks', 'categories'));
    }
}
