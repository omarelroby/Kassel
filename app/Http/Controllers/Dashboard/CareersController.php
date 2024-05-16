<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerTranslation;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Career::orderBy('id','desc')->paginate(10);
        return view('dashboard.careers.index',compact('careers' ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.careers.create');
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
            'ar.title' => 'required',
            'en.title' => 'required',
        ]);
        $data=$request->all();
        Career::create($data);
        return redirect()->route('careers.index')->with('success','تم إضافة البيانات بنجاح');
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
        $career=Career::find($id);
        return view('dashboard.careers.edit',compact('career'));
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
        $request->validate([
            'ar.title' => 'required',
            'en.title' => 'required',
        ]);
        $career=Career::find($id);
        $career->update($request->all());
        return redirect( )->route('careers.index')->with('success','تم تعديل البيانات بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $delete = $career->delete();

        if (!$delete) {
            return back()->with('error','failed');
        }
        return back()->with('error','Deleted Successfully');
    }
}
