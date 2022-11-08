<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use App\Models\RankType;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $ranktypes = RankType::all();
        return view('admin.rank_types.index', compact('ranktypes'));
    }
}
