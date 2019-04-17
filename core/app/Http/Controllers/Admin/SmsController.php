<?php

namespace App\Http\Controllers\Admin;

use App\BasicSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    public function SmsSettings()
    {
        $basicSetting = BasicSetting::first();
        return view('admin.pages.SmsSettings',compact('basicSetting'));
    }

    public function SmsSettingsPro(Request $request)
    {
        //update query

        $basicSetting = BasicSetting::first();

        $basicSetting->sms_api = $request->sms_api;

        $basicSetting->save();


        //redirect
        Session()->flash('success', 'Content successfully updated!');
        return redirect()->back();
    }
}
