<?php

namespace App\Http\Controllers\Admin\Rank;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Rank\StoreRequest;
use App\Models\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Rank::firstOrCreate($data);
        return redirect()->route('admin.ranks.index');
    }
}
