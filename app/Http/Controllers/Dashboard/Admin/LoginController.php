<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function get() {
        return view('dashboard.admin.login');
    }
    public function get_user() {
        return view('dashboard.User.login');
    }

    public function post() {
        $this->validate(request(),[
            'email' => 'required|email|max:225',
            'password' => 'required|string|max:191',
        ]);
        $user = Admin::where('email',request()->email)->first();
        if (!$user) {

            return back()->with('error','البيانات غير صحيحة');
        }


        $remember = request()->has('remember')? true:false;
        $credentials = array('email' => request()->email, 'password' => request()->password);
        $checkLogin = Auth::guard('admin')->attempt($credentials,$remember);
        if (!$checkLogin){
            session()->flash('error','البيانات غير صحيحة');
            return redirect('dashboard/login');

        }

        return redirect('/dashboard');

    }
    public function post_user() {
//       dd(request()->all());
        $this->validate(request(),[
            'email' => 'required|email|max:225',
            'password' => 'required|string|max:191',
        ]);
        $user = User::where('email',request()->email)->first();
        if (!$user) {
            return back()->with('error','البيانات غير صحيحة');
        }
        $remember = request()->has('remember')? true:false;
        $credentials = array('email' => request()->email, 'password' => request()->password);
        $checkLogin = Auth::guard('web')->attempt($credentials,$remember);
        if (!$checkLogin){
            session()->flash('error','البيانات غير صحيحة');
            return redirect('/user/login');

        }
        return redirect('/home-user');

    }

    public function logout () {
        auth()->guard('admin')->logout();
        return redirect('/dashboard/login');
    }
    public function logout_user () {
        auth()->guard('web')->logout();
        return redirect('/user/login');
    }
}
