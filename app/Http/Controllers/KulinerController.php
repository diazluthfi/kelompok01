<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function show()
    {
        $kuliners = Kuliner::with('user')->get();
        
        // return $destinations;
        return view('kuliner.kuliner', compact('kuliners'));
        
    }
}
