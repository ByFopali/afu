<?php

namespace App\Http\Controllers\Admin\RankType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RankType\StoreRequest;
use App\Models\RankType;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        RankType::firstOrCreate($data);
        return redirect()->route('admin.rank_types.index');
    }
}
