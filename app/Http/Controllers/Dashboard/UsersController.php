<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('id','desc')->paginate(10);
        return view('dashboard.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'unique:users,email',
            'phone' => 'unique:users,phone',
        ],[
           'email.unique'=>'this is email used before',
           'phone.unique'=>'this is phone used before',
        ]);
        $data=$request->all();
        if($request->hasFile('photo'))
        {
            $path='public/users';
            $ext=$request->file('photo')->getClientOriginalExtension();
            $name=time().'.'.$ext;
            $data['photo']=$request->file('photo')->move($path,$name);
        }
        if ($request->hasFile('photo'))
        {
            User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'password'=>bcrypt($data['password']),
            'photo'=>$data['photo']
        ]);

        }
            else
            {
                User::create([
                    'name'=>$data['name'],
                    'email'=>$data['email'],
                    'phone'=>$data['phone'],
                    'password'=>bcrypt($data['password']),
                 ]);
            }
        return redirect('dashboard/users');
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banks=Banks::where('user_id',$id)->paginate(10);
        return  view('dashboard.users.bank_accounts',compact('banks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('dashboard.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $data=$request->all();
        if($request->hasFile('photo'))
        {
            $path='public/users';
            $ext=$request->file('photo')->getClientOriginalExtension();
            $name=time().'.'.$ext;
            $data['photo']=$request->file('photo')->move($path,$name);
        }

        if($request->password!=null)
        {
            $user->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'password'=>bcrypt($data['password']),
            ]);
        }
        else
        {

                $user->update([
                    'name'=>$data['name'],
                    'email'=>$data['email'],
                    'phone'=>$data['phone'],
                 ]);


        }
        if ($request->hasFile('photo'))
        {
            $user->update([
                 'photo'=>$data['photo']
            ]);

        }

        return redirect('dashboard/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $delete = $user->delete();

        if (!$delete) {
            return back()->with('error',trans('response.failed'));
        }
        return back()->with('error','Deleted Successfully');
    }
}
