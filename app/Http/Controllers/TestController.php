<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewCategoryCreate;
use app\Helpers\Fileuploadinghelper;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class TestController extends BaseController
{
    protected $filehelper;
    public function __construct() {
        $this->filehelper = new Fileuploadinghelper;
    }
    public function fileStore(Request $request){
        $validator = Validator::make($request->all(), [
            'city_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        // return $val;
        $file_path =  $this->filehelper->storeFile('bg_image',$request->file('bg_image'));
    }
}
