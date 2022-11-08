<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $zsylists = ZsyList::all();
        return view('admin.zsy_lists.index', compact('zsylists'));
    }
}
