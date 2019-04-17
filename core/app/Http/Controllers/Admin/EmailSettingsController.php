<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BasicSetting;

class EmailSettingsController extends Controller
{
    public function EmailSettings()
    {
        $basicSetting = BasicSetting::first();
        return view('admin.pages.EmailSettings',compact('basicSetting'));
    }


    public function EmailSettingsPro(Request $request)
    {
        //update query

        $basicSetting = BasicSetting::first();
        $basicSetting->email_sent_form = $request->email_sent_from;
        $basicSetting->email_template = $request->email_template;
        $basicSetting->save();
        //redirect
        Session()->flash('success', 'Content successfully updated!');
        return redirect()->back();
    }
}
