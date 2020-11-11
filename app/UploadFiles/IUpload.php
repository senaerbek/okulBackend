<?php
namespace App\UploadFiles;

interface IUpload{
    public function UploadFile($value, $request);
}