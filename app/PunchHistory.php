<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PunchHistory extends Model
{
    public $payrate;

    protected $fillable = [
        'punch_in_time', 'punch_out_time'
    ];

    // @overwritten
    public function save(array $options = []){
        if ($this->punch_out_time == null) {

        }  else {
            $endtime = strtotime($this->punch_out_time);
            $starttime = strtotime($this->punch_in_time);
            $duration = $endtime - $starttime;
            $salary = $duration *  $this->payrate / 3600;
            $this->salary = $salary;
        }
        parent::save();
    }

    public function user(){
        return $this->belongsTo('App\User','employee_id','id');
    }

}
