<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
//        dd($data);
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['mail' => $data['email']] ,$data);
//        dd($data);
        return redirect()->route('admin.users.index');
    }
}
