<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BasicSetting;

class BasicSettingsController extends Controller
{
    public function basicSettings()
    {
        $basicSetting = BasicSetting::where('id', 1)->first();
        return view('admin.pages.basicSettings',compact('basicSetting'));
        
    }

    public function BasicSettingsPro(Request $request)
    {
        //return $request;

        //check registration, emailVerification, smsVerification value
        $registration = 0;
        $EmailVerification = 0;
        $SMSVerification = 0;

        $EmailNotification = 0;
        $SMSNotification = 0;


        if ($request->has('registration')) {
            $registration = 1;
        }
        if ($request->has('EmailVerification')){
            $EmailVerification = 1;
        }
        if ($request->has('SMSVerification')){
            $SMSVerification = 1;
        }
        if ($request->has('EmailNotification')){
            $EmailNotification = 1;
        }
        if ($request->has('SMSNotification')){
            $SMSNotification = 1;
        }

        //update query

        $basicSetting = BasicSetting::find(1);

        $basicSetting->websiteTitle = $request->websiteTitle;
        $basicSetting->colorCode = $request->colorCode;
        $basicSetting->currencyText = $request->currencyText;
        $basicSetting->currencySymbol = $request->currencySymbol;

        $basicSetting->registration = $registration;
        $basicSetting->EmailVerification = $EmailVerification;
        $basicSetting->SMSVerification = $SMSVerification;
        $basicSetting->EmailNotification = $EmailNotification;
        $basicSetting->SMSNotification = $SMSNotification;

        $basicSetting->save();


        //redirect
        Session()->flash('status', 'Content successfully updated!');
        return redirect()->route('admin.basicSettingsPro');

    }
}
