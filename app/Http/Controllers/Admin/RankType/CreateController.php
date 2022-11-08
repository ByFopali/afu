<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.rank_types.create');
    }
}
