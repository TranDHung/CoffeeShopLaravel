<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout_login');
    }

    /**
     * Thực hiện kiểm tra đăng nhập.
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {                        
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'max:255','regex:/^[a-zA-Z0-9]+$/u'],
            'password' => ['required', 'min:8']
        ]);
        
        if($validator->fails()) {
            return redirect('login')->withErrors($validator);                            
        }
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];         
        if(Auth::attempt($data)) {
            return redirect('home');
        }        
        return redirect('login')->withErrors('Đăng nhập thất bại! Vui lòng kiểm tra lại thông tin đăng nhập');
    }

    /**
     * Đăng xuất.
     *
     * @return \Illuminate\Http\Response
     */
    public function dologout(Request $request)
    {                        
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
