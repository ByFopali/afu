<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\RankType;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $ranktypes = RankType::all();
        $categories = Category::all();
        return view('admin.categories.create', compact('categories', 'ranktypes'));
    }
}
