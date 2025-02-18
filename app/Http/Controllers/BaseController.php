<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**Declare  response veriables */
    public $status;
    public $success;
    public $error;
    /**Declare  response veriables */
    public function getSuccess(){
        return $this->success;
    }
    public function setSuccess($success){
        $this->success = $success;
        return $this;
    }
    public function getError(){
        return $this->error;
    }
    public function setError($error){
        $this->error = $error;
        return $this;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
        return $this;
    }

    public function getResponse()
    {
        $response = [
            'success'=> $this->getSuccess(),
            'error'=> $this->getError(),
            'code'=> $this->getStatus(),
        ];
        return response()->json($response, $this->getStatus());
    }


}
