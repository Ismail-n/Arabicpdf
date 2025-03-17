<?php

namespace App\Http\Controllers\Api\Hospital\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Hospital\Management\ManagementUserLoginRequest;
use App\Services\Hospital\Authservice;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function loginManagementUser(ManagementUserLoginRequest $request){
        Authservice::loginService($request);
    }
}
