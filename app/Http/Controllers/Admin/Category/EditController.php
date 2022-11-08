<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Models\ZsyList;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(ZsyList $zsylist)
    {

        $zsytypes = ZsyType::all();
        return view('admin.zsy_lists.edit', compact('zsylist', 'zsytypes'));
    }
}
