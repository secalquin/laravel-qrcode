<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zxing\QrReader;

class LectorQRController extends Controller
{
    public function lectorQR(Request $request){

        $qrcode = new QrReader(public_path('img/qr.png'));
        return redirect()->back()->with('success', $qrcode->text());   

    }
}
