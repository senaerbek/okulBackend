<?php
namespace App\UploadFiles;
use App\UploadFiles\IUpload;

class Upload implements IUpload{
    public function UploadFile($value, $request){
        if($request->hasFile($value)){
            
            $filenameWithExt = $request->file($value)->getClientOriginalName();
            $filaname = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file($value)->getClientOriginalExtension();
            $FileNameToStore=$filaname.'_'.time().'.'.$extension;
            $path=$request->file($value)->storeAs('public/'.$value,$FileNameToStore);
            return $path;
        }
        else{
            $FileNameToStore = 'noimage.jpg';
        }
    }
}