<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
     protected $table = 'reports';
    //
    public function updates()
    {
        return $this->hasMany('App\ReportUpdate');
    }
    public function category()
    {
        return $this->hasOne('App\Category');
    }
    public function branch()
    {
        return $this->hasOne('App\Branch');
    }

    public function reportDay(){
        return $nameOfDay = date('D', strtotime($this->created_at));
    }
}
