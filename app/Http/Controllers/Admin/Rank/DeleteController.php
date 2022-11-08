<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rank\UpdateRequest;
use App\Models\Rank;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Rank $rank)
    {
        $rank->delete();
        return redirect()->route('admin.ranks.index');
    }
}
