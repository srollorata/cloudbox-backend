<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //display the specified users information 
    public function show(Request $request)
    {
        return $request->user();
    }
}
