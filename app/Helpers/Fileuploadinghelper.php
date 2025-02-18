<?php
namespace app\Helpers;

use Illuminate\Support\Facades\Storage;

class Fileuploadinghelper{

    public function storeFile($file_type,$file)
    {
        $disk = null;
        if($file_type == 'bg_image'){
            $disk = 'background_images';
        }
        if($disk !=null){
            $filePath = Storage::disk('local')->put($disk,$file);
            return $filePath;
        }

    }
}
