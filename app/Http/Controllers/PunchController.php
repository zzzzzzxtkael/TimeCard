<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PunchHistory;
use Illuminate\Support\Facades\Auth;

class PunchController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {

        $records = PunchHistory::where('employee_id', Auth::user()->id)
                    ->orderby('id','desc')
                    ->get();

        return view('punch/punch', ['records' => $records]);
    }

    public function form()
    {
        return view('home');
    }

    public function test()
    {
        $starttime = time();
        $endtime = time() + 24*1000*60*60;
        //$salary = ($endtime - $starttime) * Auth::user()->pay_rate;
        // var_dump($salary);

    }

    public function insert($punch_id){
        if ($punch_id < 0) {
            $record = new PunchHistory();
            $record->employee_id = Auth::user()->id;
            $record->punch_in_time = date('Y-m-d H:i:s');
            $record->save();
        }
        else {
            $record = PunchHistory::find($punch_id);
            $record->payrate = (int)Auth::user()->pay_rate;
            $record->punch_out_time = date('Y-m-d H:i:s');
            // $endtime = time();
            // $starttime = strtotime($record->punch_in_time);
            // $salary = ($endtime - $starttime ) *  $record->payrate / 3600;
            // $record->salary = $salary;
            $record->save();
        }
        return redirect()->route('punch_view');
    }


    public function delete(){

    }

}
