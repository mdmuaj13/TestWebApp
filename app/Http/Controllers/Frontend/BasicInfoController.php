<?php

namespace App\Http\Controllers\Frontend;


use App\BasicInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class BasicInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest()){
            return  redirect()->back()->with('error','To access that page Login first');
        } else {
            $data = BasicInfo::get();
            return view('frontend.pages.list')->with('data', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new BasicInfo();

        $info->name = $request->name;
        $info->email = $request->email;
        $info->phone = $request->phone;
        $saved = $info->save();
        if ($saved){
            return redirect()->back()->with('msg','Registered into Database');
        } else {
            return redirect()->back()->with('msg','Error! Not Registered into Database');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function show(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicInfo $basicInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BasicInfo  $basicInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicInfo $basicInfo)
    {
        //
    }
}
