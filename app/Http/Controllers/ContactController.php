<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(){
        $data = array("fruit"=>"apple");
       Log::info("Info logging",['id'=>2]);
       Log::warning("warning logging",$data);
       Log::notice("Notice logging");
       Log::error("Error logging");
       Log::debug("Debug logging");
       Log::critical("Critical logging");
       Log::emergency("Emergency logging");
       Log::alert("Alert logging");
       Log::channel('customLog')->info('custom channel log');
    }
}
