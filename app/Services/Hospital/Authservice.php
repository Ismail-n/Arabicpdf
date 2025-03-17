<?php

namespace App\Services\Hospital;

use App\Models\User;


class Authservice {

    public function generateAuthToken($user){
        $token_name = config('constants.token_name');
        return $user->createToken($token_name)->plainTextToken;
    }
    /**
     * Login
     **/
    static function loginService($requestparams){

    }
}
