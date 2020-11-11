<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KisiselBilgilerModel;
use App\Model\MezuniyetBilgilerModel;
use App\Model\PasaportBilgileriModel;
use App\Model\BelgelerModel;
use Illuminate\Support\Facades\Storage;

class DetailsController extends Controller
{
    public function getDetails($id){
        $detail = MezuniyetBilgilerModel::find($id);
        return response()->json($detail,200);
    }

    public function getPassportDetails($id){
        $detail = PasaportBilgileriModel::find($id);
        return response()->json($detail,200);
    }

    public function getBelgeDetails($belgeTur, $id){

        $detail = BelgelerModel::find($id);
        //return response()->json($detail,200);
        return Storage::download($detail->$belgeTur);
    }
    
    public function getBelgeDetails2($id){
        $detail = BelgelerModel::find($id);
        return response()->json($detail,200);
        
    }
}
