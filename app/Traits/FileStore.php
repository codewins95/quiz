<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;


trait FileStore
{

    public static function saveFile(UploadedFile $file)
    {
        if (isset($file)) {
            $current_date  = Carbon::now()->format('d-m-Y');

            if (!File::isDirectory('uploads/file/' . $current_date)) {
                File::makeDirectory('uploads/file/' . $current_date, 0777, true, true);
            }

            $file_name = uniqid() . '.' . $file->extension();
            $file->storeAs('uploads/file/' . $current_date . '/', $file_name);
            return 'uploads/file/' . $current_date . '/' . $file_name;
        } else {
            return null;
        }
    }


    public function imageUpload($image, $filePath)
    {
        if (isset($image)) {
            // $directoryPath = public_path("uploads/{$filePath}/");
            
            if (!File::isDirectory("public/uploads/{$filePath}/")) {
                File::makeDirectory("public/uploads/{$filePath}/", 0777, true, true);
            }


            $fileName = md5(rand(0, 9999) . '_' . time()) . '.' . $image->clientExtension();
            $imgPath = "public/uploads/{$filePath}/" . $fileName;
            $image->move(public_path("uploads/{$filePath}"), $fileName);

            clearstatcache();
            return $imgPath;
        }
    
        return null; 
    }

    public function deleteImageDirect($file)
    {
        if ($file && File::exists($file)) {
            File::delete($file);
            return true;
        }

        return false;
    }
    
}
