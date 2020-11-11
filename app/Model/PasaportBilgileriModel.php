<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PasaportBilgileriModel extends Model
{
    protected $table ="pasaportbilgileri";
    public $timestamps = false;
    protected $fillable =[
        'id',
        'user_id',
        'pasaportNumber',
        'kimlik',
        'cinsiyet',
        'dogumTarih',
        'duzenlemeTarih',
        'gecerlilikTarih',
        'uyruk',
        'pasaportTur',

    ];
    public function Kisisel(){
        return $this->belongsTo('App\Model\KisiselBilgilerModel');
    }
}
