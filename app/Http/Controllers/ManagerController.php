<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\PunchHistory;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller {
    public function list(){
        $records = PunchHistory::
                    orderby('id','desc')
                    ->get();
        // var_dump($records->user->name);
        // exit(1);
        return view('manager/list', ['records' => $records]);
    }


    public function edit($punchid){
        $temp = PunchHistory::find($punchid);

        return view('manager/edithistory',['record' => $temp]);
    }

    public function update(Request $request){
        $temp = PunchHistory::find($request->id);
        $temp->fill($request->all());
        $temp->payrate = (int)Auth::user()->pay_rate;
        $temp->save();
        return redirect('manager/list');
    }

    public function deletepunch($punchid){
        $temp = PunchHistory::find($punchid);
        $temp->delete();
        return redirect('manager/list');
    }
}
