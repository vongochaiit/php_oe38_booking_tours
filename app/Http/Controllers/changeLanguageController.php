<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changeLanguageController extends Controller
{

     private $langActive = [
        'vi',
        'en',
    ];
    public function changeLanguage( Request $request, $language)
{
    \Session::put('lang', $language);

    return redirect()->back();
}
}
