<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BelgelerModel extends Model
{
    protected $table ="belgeler";
    public $timestamps = false;
    protected $fillable =[
        'id',
        'user_id',
        'pasaportEkleyin',
        'diplomaEkleyin',
        'transkriptEkleyin',
        'dilBelgesiEkleyin'
    ];
    public function Kisisel(){
        return $this->belongsTo('App\Model\KisiselBilgilerModel');
    }
}
