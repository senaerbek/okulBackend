<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KisiselBilgilerModel extends Model
{
    protected $table ="kisiselBilgiler";
    public $timestamps = false;
    protected $fillable =[
        'ad',
        'soyad',
        'email',
        'tel',
        'departman'
    ];

    public function Mezuniyet(){
      return  $this->hasOne('App\Model\MezuniyetBilgilerModel','user_id','id');
    }
    public function Pasaport(){
        return $this->hasOne('App\Model\PasaportBilgileriModel','user_id','id');
    }

    public function Belgeler(){
        return $this->hasOne('App\Model\BelgelerModel','user_id','id');
    }
}
