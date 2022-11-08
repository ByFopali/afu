<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RankType\UpdateRequest;
use App\Models\RankType;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, RankType $ranktype)
    {
        $data = $request->validated();
        $ranktype->update($data);
//        dd($data);
        return view('admin.rank_types.show', compact('ranktype'));
    }
}
