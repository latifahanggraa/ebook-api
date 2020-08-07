<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //
    public function me(){
        return[
            "nis" => 3103118081,
            "name" => "Latifah Anggraeni",
            "gender" => "Perempuan",
            "phone" => 6282671584928,
            "class" => "XII RPL 3"
        ];
    }
}
