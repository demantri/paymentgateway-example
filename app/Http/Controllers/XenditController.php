<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\XenditService;

class XenditController extends Controller
{
    protected $xendit;

    public function __construct(XenditService $xendit)
    {
        $this->xendit = $xendit;
    }

    public function createInvoice(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:10000',
        ]);

        $params = [
            'external_id' => 'invoice-' . time(),
            'payer_email' => $request->email,
            'description' => 'Pembayaran oleh ' . $request->name,
            'amount' => $request->amount,
        ];

        $invoice = $this->xendit->createInvoice($params);

        return redirect($invoice['invoice_url']);
    }

    public function showForm()
    {
        return view('xendit.form');
    }
}
