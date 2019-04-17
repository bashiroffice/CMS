<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //login page
    public function index()
    {
        if (Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');

    }

    //login process
    public function login(Request $request)
    {
       //validation
        $this->validate($request, [
            'userName'   => 'required',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('admin')->attempt(['userName' => $request->userName, 'password' => $request->password], $request->get('remember'))) {

            //redirect
            Session()->flash('success', 'You are successfully logged in !');
            return redirect()->route('admin.dashboard');
        }else{
            //redirect
            Session()->flash('warning', 'Please enter correct email and password!');
            return redirect()->route('admin.login');
        }


    }

    //dashboard
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
    
    //logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }


    
    //admin profile
    public function AdminProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.pages.AdminProfile',compact('admin'));
    }

    //profile update
    public function AdminProfileUpdate(Request $request)
    {
        //validation
        $this->validate($request, [
            'admin_name'   => 'required',
            'admin_email' => 'required|email'
        ]);

        //update query
        $userId = Auth::guard('admin')->id();

        $admin = Admin::find($userId);


        $admin->name = $request->admin_name;
        $admin->email = $request->admin_email;

        $admin->save();

        //redirect
        Session()->flash('success', 'Profile successfully updated!');
        return redirect()->back();


    }
    
     //change password
    public function changePassword()
    {

        return view('admin.pages.changeAdminPassword');
    }

    //password update
    public function PasswordUpdate(Request $request)
    {
        //validation
        $this->validate($request, [
            'current_password'   => 'required',
            'password' => 'required|min:8|confirmed'
        ]);


        $AdminPassword = Auth::guard('admin')->user()->password;

        if(password_verify($request->current_password, $AdminPassword)) {

            //update query
            $userId = Auth::guard('admin')->id();

            $admin = Admin::find($userId);

            $admin->password = Hash::make($request->password);
            $admin->save();

            //redirect
            Session()->flash('success', 'Password Change successful!');
            return redirect()->back();
        }else{
            //redirect
            Session()->flash('warning', 'Please enter correct password!');
            return redirect()->back();

        }
    }

    //test
    public function test()
    {
        if (Auth::guard('admin')->check()){
            echo 'logged';
        }else{
            echo 'not logged';
        }
    }

}
