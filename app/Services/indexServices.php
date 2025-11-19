<?php

namespace App\Services;

class indexServices {
    public static function addRecaptcha($request) {
        $recaptcha = $request->input('g-recaptcha-response');

        if ($recaptcha) {
            return view('output');
        }

        else {
            $errorRecaptcha = 1;

            return view('index', compact('errorRecaptcha'));
        }
    }
}