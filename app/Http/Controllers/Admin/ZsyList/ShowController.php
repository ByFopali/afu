<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ZsyList $zsylist)
    {
        return view('admin.zsy_lists.show', compact('zsylist'));
    }
}
