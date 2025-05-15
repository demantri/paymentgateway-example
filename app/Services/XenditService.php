<?php

namespace App\Services;

use Xendit\Xendit;

class XenditService
{
    public function __construct()
    {
        Xendit::setApiKey(config('services.xendit.api_key'));
    }

    public function createInvoice($params)
    {
        return \Xendit\Invoice::create($params);
    }
}
