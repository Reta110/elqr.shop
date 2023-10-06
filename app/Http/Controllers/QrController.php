<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Register;
use Illuminate\Http\Request;

class QrController extends Controller
{
    public function index(Request $request)
    {

        $banks = Bank::all()->pluck('name', 'id');
        $phone = "";
        $text = "";

        return view('qr.form', compact('phone', 'text', 'banks'));
    }

    public function generate(Request $request)
    {
        $request->validate([
            'bank_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'identifier' => 'required'
        ]);

        $bank = Bank::find($request->bank_id);

        if (!$bank) {
            return redirect()->back()->with('error', 'Bank not found');
        }

        $data = $request->all();
        $register = new Register();
        $register->fill($data);
        $register->save();


        return redirect()->route('qr.show', $register->id);
    }

    public function show($id)
    {
        //$register with bank
        $register = Register::find($id);

        if (empty($register)) {
            return redirect()->back()->with('error', 'Register not found');
        }

        $text = "Pagar" . ' ' . $register->bank->code . ' ' . $register->phone . ' ' . $register->identifier . ' ';

        return view('qr.pdf', compact('register', 'text'));
    }
}
