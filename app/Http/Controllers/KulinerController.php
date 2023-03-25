<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KulinerController extends Controller
{
    public function show()
    {
        $kuliners = Kuliner::with('user')->get();
        
        // return $destinations;
        return view('kuliner.kuliner', compact('kuliners'));
        
        
    }
    
    public function tambahkuliner(Request $request){
        Kuliner::create(
            [
                'name' => $request->name,
                'address' => $request->address,
                'address_url' => $request->address_url,
                'area_id' => $request->area_id,
                'user_id'=>Auth::user()->id,
                'description'=>$request->description,
            ]
            );
            return redirect()->route('kuliner.show');
    }
}
