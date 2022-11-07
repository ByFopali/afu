<?php

namespace App\Http\Controllers\Admin\ZsyType;

use App\Http\Controllers\Controller;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $zsytypes = ZsyType::all();
        return view('admin.zsy_types.index', compact('zsytypes'));
    }
}
