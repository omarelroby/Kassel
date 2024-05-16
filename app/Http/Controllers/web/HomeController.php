<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\ContactUs;
use App\Models\CareerTranslation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(app()->getLocale()=='en')
        {return view('web.homeEn');}
        else
        {return view('web.homeAr');}


    }
    public function about()
    {
        if(app()->getLocale()=='en')
        {return view('web.aboutEn');}
        else
        {return view('web.aboutAr');}


    }
    public function services()
    {
        if(app()->getLocale()=='en')
        {return view('web.servicesEn');}
        else
        {return view('web.servicesAr');}


    }
    public function careers()
    {
        $careers=Career::all();
         return view('web.careers',compact('careers'));

    }
    public function contact_us()
    {
          return view('web.contactUs' );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dashboard.contact_user.create');
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
            'title' => 'required',
            'message' => 'required',
        ],[
           'title.required'=>'this is title is required',
           'message.required'=>'this is message link is required',
        ]);
        $data=$request->all();
        ContactUs::create($data);
        return redirect('dashboard/contact-us-user');
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $contact=ContactUs::findOrFail($id);
         return view('dashboard.contact_user.edit',compact('contact'));
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
        $contact=ContactUs::findOrFail($id);
        $data=$request->all();
        $contact->update($data);
        return redirect('dashboard/contact-us-user');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ContactUs::find($id)->delete();

        if (!$delete) {
            return back()->with('error','failed');
        }
        return back()->with('error','Deleted Successfully');
    }
}
