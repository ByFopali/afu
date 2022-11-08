<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RankType\UpdateRequest;
use App\Models\RankType;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(RankType $ranktype)
    {
        $ranktype->delete();
        return redirect()->route('admin.rank_types.index');
    }
}
