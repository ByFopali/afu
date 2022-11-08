<?php

namespace App\Http\Controllers\Admin\ZsyType;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ZsyType\UpdateRequest;
use App\Models\ZsyType;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(ZsyType $zsytype)
    {
        $zsytype->delete();
        return redirect()->route('admin.zsy_types.index');
    }
}
