<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function get () {
        $data = auth('admin')->user();
        switch ($data->role) {
            case 1:
                $role = 'سوبر أدمن';
                break;
            case 2:
                $role = 'أدمن';
                break;
            case 3 :
                $role = 'مشرف';
                break;
            default:
                $role = 'غير معرف';
        }
        return view('dashboard.admin.profile',compact('data','role'));
    }

    public function post () {
//        dd(request()->all());
        $this->validate(request(),[
            'username' => 'required|string',
            'email'    => 'required|email|unique:admins,email,'.auth('admin')->id(),
            'password' => 'nullable|string|min:8|confirmed|max:255',
            'old_password'     => 'required_with:password|max:255',

        ]);
        $admin = auth('admin')->user();
        if (request()->has('password') && request()->password != null){
            if(Hash::check(request()->old_password,auth()->guard('admin')->user()->password))
            {
                $admin->password = Hash::make(request()->password);

            }
            else
            {
                session()->flash('error','كلمة المرور غير متطابقة');
                return redirect()->back();
            }
        }

        $admin->username = request()->username;
        $admin->email = request()->email;

        $save = $admin->save();
        if (!$save) {
            session()->flash('error',trans('response.failed'));
            return redirect()->back();
        }
        session()->flash('success',trans('response.updated'));
        return back();
    }
}
