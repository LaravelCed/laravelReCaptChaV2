<?php

namespace App\Http\Controllers;

use App\Services\indexServices;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function addRecaptcha (Request $request) {
        return indexServices::addRecaptcha($request);
    }
}
