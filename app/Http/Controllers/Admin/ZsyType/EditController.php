<?php

namespace App\Http\Controllers\Admin\ZsyType;

use App\Http\Controllers\Controller;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(ZsyType $zsytype)
    {
        return view('admin.zsy_types.edit', compact('zsytype'));
    }
}
