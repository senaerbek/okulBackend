<?php

namespace App\Http\Controllers\KisiselBilgiler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\KisiselBilgilerModel;
use App\Model\MezuniyetBilgilerModel;
use App\Model\PasaportBilgileriModel;
use App\Model\BelgelerModel;
use App\UploadFiles\Upload;
use Illuminate\Support\Facades\Storage;

class KisiselBilgiler extends Controller
{

    private $uploadF;

    public function __construct(Upload $uploadF)
    {
        $this->uploadF = $uploadF;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestValues = $request->all();
        $Kisisel = new KisiselBilgilerModel;
        $Kisisel->ad =  $requestValues['ad'];
        $Kisisel->soyad =$requestValues['soyad'];
        $Kisisel->email = $requestValues['email'];
        $Kisisel->tel = $requestValues['tel'];
        $Kisisel->departman = $requestValues['departman'];
        json_encode( $Kisisel->save());

       $Mezuniyet = new MezuniyetBilgilerModel;
       $Mezuniyet->diplomaNot = $requestValues['diplomaNot'];
       $Mezuniyet->ulkeSec = $requestValues['ulkeSec'];
       $Mezuniyet->universiteSec = $requestValues['universiteSec'];
       $Mezuniyet->dusunce = $requestValues['dusunce'];
       json_encode(   $Kisisel->Mezuniyet()->save($Mezuniyet));

       $Pasaport = new PasaportBilgileriModel;
       $Pasaport->pasaportNumber=$requestValues['pasaportNumber'];
       $Pasaport->kimlik=$requestValues['kimlik'];
       $Pasaport->cinsiyet=$requestValues['cinsiyet'];
       $Pasaport->dogumTarih=$requestValues['dogumTarih'];
       $Pasaport->duzenlemeTarih=$requestValues['duzenlemeTarih'];
       $Pasaport->gecerlilikTarih=$requestValues['gecerlilikTarih'];
       $Pasaport->uyruk=$requestValues['uyruk'];
       $Pasaport->pasaportTur=$requestValues['pasaportTur'];
       json_encode( $Kisisel->Pasaport()->save($Pasaport));

       $Belge = new BelgelerModel;
       $Belge->pasaportEkleyin=$this->uploadF->UploadFile('pasaportEkleyin',$request);
       $Belge->diplomaEkleyin=$this->uploadF->UploadFile('diplomaEkleyin',$request);
       $Belge->transkriptEkleyin=$this->uploadF->UploadFile('transkriptEkleyin',$request);
       $Belge->dilBelgesiEkleyin=$this->uploadF->UploadFile('dilBelgesiEkleyin',$request);
       json_encode( $Kisisel->Belgeler()->save($Belge));

 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kisiler = KisiselBilgilerModel::find($id);
        if(is_null($id)){
            return response()->json("yok",404);
        }
        return response()->json($kisiler->Mezuniyet,200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
