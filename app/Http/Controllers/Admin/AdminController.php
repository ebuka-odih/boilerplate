<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function settings()
    {
        $user = Auth::user();
        return view('admin.setting.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate(
            ['name' => 'required']
        );

        $user->name = $request['name'];
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function activities()
    {
        $user = Auth::user();
        $data = DB::table('sessions')->whereUserId(\auth()->id())->get();
        return view('admin.setting.activities', compact('data', 'user'));
    }

}
