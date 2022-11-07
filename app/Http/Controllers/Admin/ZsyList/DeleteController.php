<?php

namespace App\Http\Controllers\Admin\ZsyList;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ZsyList\UpdateRequest;
use App\Models\ZsyList;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(ZsyType $zsytype)
    {
        $zsytype->delete();
        return redirect()->route('admin.zsy_types.index');
    }
}
