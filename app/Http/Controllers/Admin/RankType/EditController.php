<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use App\Models\RankType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(RankType $ranktype)
    {
        return view('admin.rank_types.edit', compact('ranktype'));
    }
}
