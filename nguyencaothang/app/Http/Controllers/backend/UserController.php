<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $list = User::where('status', '!=', 0)
            ->select('id', 'name', 'email', 'phone', 'username', 'password', 'address', 'roles')
            ->orderBy('created_at', 'desc')
            ->get();

        return view("backend.user.index", compact('list'));   
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->password = bcrypt($request->password); // Nên mã hóa mật khẩu
        $user->address = $request->address;
        $user->roles = $request->roles;
        $user->created_at = now();
        $user->created_by = Auth::id() ?? 1; 
        $user->status = $request->status;
        $user->updated_at = now();
        $user->save();

        return redirect()->route('admin.user.index');
    }
}
