<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MobytSMSController extends Controller
{
    public function send()
    {
        echo config('mobyt-sms.mobyt_HOSTNAME');
    }
}
