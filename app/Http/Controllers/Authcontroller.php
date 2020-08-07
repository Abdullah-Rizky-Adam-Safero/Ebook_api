<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {

    public function me() {
        return [
            "nis" => 3103118001,
            "name" => "Abdullah Rizky Adam Safero",
            "gender" => "Laki-laki",
            "phone" => 62895380035892,
            "class" => "XII RPL 1"
        ];
    }
}