<?php

namespace App\Http\Controllers\Partnership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function partnershipDashboard()
    {
        return view('partnership.dasboard');
    }
}
