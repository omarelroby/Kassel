<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index () {
        $data = Admin::all();
        return view('dashboard.admin.index',compact('data'));
    }

    public function create () {

        return view('dashboard.admin.create');
    }

    public function store () {
//        dd(request()->all());
        $this->validate(request(),
            [
                'username' => 'required|string',
                'role'     => 'required|in:1,2,3,4',
                'email'    => 'required|email|unique:admins,email',
                'password' => 'required|string|confirmed',
                'password_confirmation' => 'required',
            ]);
        $create = Admin::create([
            'email'    => request()->email,
            'role'    => request()->role,
            'username'    => request()->username,
            'password' => Hash::make(request()->password),
        ]);
        if (!$create) {
            return back()->with('error','حدث شئ ما خطأ يرجى المحاولة مرة أخرى');
        }
        return back()->with('success',trans('response.added'));
    }

    public function edit (Admin $admin) {

        return view('dashboard.admin.edit',['data' => $admin]);
    }

    public function update () {
//        dd(request()->all());
        $this->validate(request(),[
            'id' => 'required|integer|exists:admins,id',
            'username' => 'required|string',
            'role'     => 'required|in:1,2,3,4',
            'email'    => 'required|email|unique:admins,email,'.request()->id,
            'password' => 'nullable|string|min:8|confirmed|max:255',

        ]);
        $admin = Admin::findOrFail(request()->id);
        if (request()->has('password') && request()->password != null){
            $admin->password = Hash::make(request()->password);
        }

        $admin->username = request()->username;
        $admin->role = request()->role;
        $admin->email = request()->email;

        $save = $admin->save();
        if (!$save) {
            session()->flash('error',trans('response.failed'));
            return redirect()->back();
        }
        session()->flash('success',trans('response.updated'));
        return back();
    }

    public function status (Admin $admin) {
        switch (request()->status) {
            case '1' :
                $message = 'تم تفعيل الحساب';
                break;
            case '0' :
                $message = 'تم إيقاف الحساب';
                break;
            default :
                return abort(404);
        }
        $admin->status = request()->status;
        if ($admin->save()) {
            return response()->json(['status' => 1 , 'message' => $message]);
        }
        return response()->json(['status' => 0 , 'message' => trans('response.failed')]);
    }

    public function delete (Admin $admin) {
//        dd($admin);
        if (!$admin->delete()) {
            return back()->with('error', trans('response.failed'));
        }
        return back()->with('success',trans('response.'));
    }
}
