<?php

namespace App\Http\Controllers;

use App\Models\AdminLoginModel;
use Illuminate\Http\Request;

class AdminLoginContrller extends Controller
{
    function loginPage()
    {
        return view('login.adminLogin');
    }

    function adminLoginCheck(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $count = AdminLoginModel::where('email', $email)->where('password', $password)->count();

        if ($count == 1){
            $request->session()->put('email', $email);
            return 1;
        }else{
            return 0;
        }
    }

    function adminLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/loginPage');
    }
}
