<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MidtransService;

class MidtransController extends Controller
{
    protected $midtrans;

    public function __construct(MidtransService $midtrans)
    {
        $this->midtrans = $midtrans;
    }

    public function form()
    {
        return view('midtrans.form');
    }

    public function pay(Request $request)
    {
        $request->validate([
            'order_id' => 'required|string',
            'amount' => 'required|numeric|min:1000',
        ]);

        $snapToken = $this->midtrans->createTransaction(
            $request->order_id,
            $request->amount,
            [
                'first_name' => 'Demo',
                'email' => 'demo@example.com',
            ]
        );

        return view('midtrans.payment', compact('snapToken'));
    }
}
