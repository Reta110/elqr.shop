<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index(Request $request)
    {

        $banks = [
            '0102' => 'Banco de Venezuela',
            '0104' => 'Venezolano de Crédito',
            '0105' => 'Mercantil',
            '0108' => 'Provincial',
            '0114' => 'Bancaribe',
            '0115' => 'Exterior',
            '0116' => 'Occidental de Descuento',
            '0128' => 'Banco Caroní',
            '0134' => 'Banesco',
            '0138' => 'Banco Plaza',
            '0151' => 'BFC Banco Fondo Común',
            '0156' => '100% Banco',
            '0157' => 'Del Sur',
            '0163' => 'Banco del Tesoro',
            '0166' => 'Banco Agrícola de Venezuela',
            '0168' => 'Bancrecer',
            '0169' => 'Mi Banco',
            '0172' => 'Bancamiga',
            '0174' => 'Banplus',
            '0175' => 'Bicentenario del Pueblo',
            '0177' => 'Banfanb',
            '0191' => 'BNC Nacional de Crédito',
        ];

        if (isset($request->identifier)) {
            $bankPhone = '2662';
            $bank = $request->bank;
            $name = $request->name;
            $phone = $request->phone;
            $identifier = $request->identifier;

            $data = $request->all();
            $register = new Register();
            $register->fill($data);
            $register->save();


            $text = "Pagar" . ' ' . $bank . ' ' . $phone . ' ' . $identifier . ' ';
            $bankName = $banks[$bank];

            return view('qr.pdf', compact('phone', 'text', 'bank', 'name', 'bankName', 'bankPhone'));
        }

        $phone = "";
        $text = "";

        return view('qr.form', compact('phone', 'text', 'banks'));
    }
}
