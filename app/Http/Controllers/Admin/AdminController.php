<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KisiselBilgilerModel;
use App\Model\MezuniyetBilgilerModel;
use App\Model\PasaportBilgileriModel;
use App\Model\BelgelerModel;

class AdminController extends Controller
{
    public function admin(){
        return response()->json(KisiselBilgilerModel::get(),200);

    }

    public function adminById($id){
        $kisiler = KisiselBilgilerModel::find($id);
        if(is_null($id)){
            return response()->json("yok",404);
        }
        return response()->json($kisiler,200);
}

}
