<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MezuniyetBilgilerModel extends Model
{
    
    protected $table ="mezuniyetbilgiler";
    public $timestamps = false;
    protected $fillable =[
        'id',
        'user_id',
        'diplomaNot',
        'ulkeSec',
        'universiteSec',
        'dusunce'
    ];
    public function Kisisel(){
        return $this->belongsTo('App\Model\KisiselBilgilerModel');
    }
}
