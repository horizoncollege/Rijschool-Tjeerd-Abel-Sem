<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PakketOphaler extends Controller
{
    public function ophaler()
    {
        return Pakket::all();
    }
}
