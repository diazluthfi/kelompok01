<?php

namespace App\Http\Controllers;

use App\Models\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //tambah gambar
    public function tambahimage(Request $request){
        image::create(
            [
                'name' => $request->name,
                'address' => $request->address,
                'address_url' => $request->address_url,
                'description'=>$request->description,
            ]
            );

            return redirect()->route('destinasi.show');
    }
}
