<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $zsytypes = ZsyType::all();
        return view('admin.zsy_lists.create', compact('zsytypes'));
    }
}
