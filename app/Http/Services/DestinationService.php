<?php

namespace App\Http\Services;

use App\Models\destination;
use Illuminate\Support\Facades\Auth;

class DestinationService{

    public function create($request){
        destination::create(
            [
                'name' => $request->name,
                'address' => $request->address,
                'address_url' => $request->address_url,
                'area_id' => $request->area_id,
                'user_id'=>Auth::user()->id,
                'description'=>$request->description,
            ]
            );
    }
}