<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ForgetPasswordController extends Controller
{
    public function forgetPassword () {
        return view('dashboard.admin.forgetPassword');
    }

    public function forgetPasswordPost () {
//        dd(request()->all());
        $this->validate(request(),['email' => 'required|email|exists:admins,email|max:191',]);
        $token = $this->randToken();
        $admin = Admin::where('email',request()->email)->first();
        $admin->reset_password_code = $token;
        $admin->save();
        $sendMail = $this->resetPasswordMail(request()->email,$token);
        if (!$sendMail){
            return back()->with('error','خطأ لم يتم الإرسال');
        }

        return redirect('dashboard/admin/reset-password')->with('success','تم إرسال كود إستعادة كلمة المرور');

    }

    public function resetPassword () {
        return view('dashboard.admin.resetPassword');
    }

    public function resetPasswordPost () {
//        dd(request()->all());
        $this->validate(request(),[
            'code' => ['required','integer'],
            'password' => 'required|string|confirmed|min:8|max:36',
        ]);
        $admin = Admin::where('reset_password_code',request()->code)->first();
        if (!$admin) {
            return back()->with('message','البيانات غير صحيحة');
        }

        $admin->password = Hash::make(request()->password);
        $admin->reset_password_code = null;
        $admin->save();

        return redirect('dashboard/admin/login')->with('success','تم تحديث كلمة المرور بنجاح');

    }

    protected function randToken () {
        $token = rand(100000,999999);
        return (Admin::where('reset_password_code',$token)->first())?$this->randToken():$token;

    }

    public function resetPasswordMail ($email,$code) {
        $data['code'] = $code;
        $data['text'] = 'كود إستعادة كلمة المرور الخاص بك';
        $data['alignItem'] = app()->getLocale() == 'en' ?'left':'right';

        Mail::send('dashboard.admin.resetPasswordEmail', $data, function($message) use ($email) {
            $message->to($email)
                ->subject(' إستعادة كلمة المرور ');
            $message->from('no-reply@thestock.sa','The Stock | ذاستوك');
        });
        if (Mail::failures()){
            return false;
        }
        return true;
    }
}
