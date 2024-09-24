<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $geoIpInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $state = $geoIpInfo->state_name;
        return $state;
    }
}
