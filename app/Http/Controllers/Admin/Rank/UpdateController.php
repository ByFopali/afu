<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rank\UpdateRequest;
use App\Models\Category;
use App\Models\Rank;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Rank $rank)
    {
        $categories = Category::all();
        $data = $request->validated();
        $rank->update($data);
//        dd($data);
        return view('admin.ranks.show', compact('rank', 'categories'));
    }
}
