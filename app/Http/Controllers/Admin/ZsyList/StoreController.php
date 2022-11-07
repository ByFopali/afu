<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ZsyList\StoreRequest;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        ZsyType::firstOrCreate($data);
        return redirect()->route('admin.zsy_types.index');
    }
}
