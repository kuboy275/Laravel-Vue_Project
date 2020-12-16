<?php

namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


trait StorageImageTrait{
    public function storageTraitUpload($request , $fileName , $folderName){
        if (!empty($request->$fileName)) {
            $file = $request->$fileName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(2) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fileName)->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);
            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
        }

        return null;

    }

    public function storageTraitUploadMutiple($file, $folderName){
        
        $fileNameOrigin = $file->getClientOriginalName();
        $fileNameHash = Str::random(5).'.'.$fileNameOrigin;
        $filePath = $file->storeAs( 'public/'. $folderName . '/' . auth()->id() , $fileNameHash);
        $dataUploadTrait = [
            'file_name' =>$fileNameOrigin,
            'file_path' => Storage::url($filePath)
        ];
        return $dataUploadTrait;
    }
}