<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ZsyList\UpdateRequest;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, ZsyList $zsylist)
    {
        $data = $request->validated();
        $zsylist->update($data);
//        dd($data);
        return view('admin.zsy_lists.show', compact('zsylist'));
    }
}
