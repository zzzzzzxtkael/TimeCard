<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function list(){
        $user = User::
                    orderby('id','desc')
                    ->get();

        return view('manager/employee', ['users' => $user]);
    }

    public function edit($userid){
        $user = User::find($userid);
        return view('manager/edituser',['user' => $user]);
    }

    public function update(Request $request){
        $temp = User::where('id',$request->id)->first();
        $temp->fill($request->except('id'));
        $temp->save();
        return view('manager/edituser',['user' => $temp]);
    }

    public function deleteuser($userid){
        $temp = User::find($userid);
        $temp->delete();
        return redirect('manager/employee');
    }
}
