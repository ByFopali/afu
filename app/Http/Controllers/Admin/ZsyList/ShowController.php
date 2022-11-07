<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(ZsyType $zsytype)
    {
        return view('admin.zsy_types.show', compact('zsytype'));
    }
}
