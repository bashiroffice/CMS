<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //login page
    public function index()
    {
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

            return redirect()->route('admin.dashboard');
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

    public function test()
    {
        return 'hello';
    }
    
}
