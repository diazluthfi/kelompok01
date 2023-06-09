<?php

namespace App\Http\Controllers;

use App\Http\Services\DestinationService;
use App\Models\destination;
use App\Models\area;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    //funsi untuk menampilkann formulir tambah destinasi
    public function create(){
        $areas = area::select('id','name')->get();
        
        return view('dashboard.destinasi.create', compact('areas'));
    }

    // fungsi untuk menyimpan destinasi ke db
    public function tambahdestinasi( Request $request, DestinationService $destinationService){
        
        
        $destinationService->create($request);
            return redirect()->route('dashboard.destinasi.index');
    }

    //menampilkan semua data destinasi
    public function index()
    {
        $destinations = destination::with('user')->get();
        
        // return $destinations;
        return view('dashboard.destinasi.index', compact('destinations'));
        
    }

    public function lihat(){
        $destinations = destination::with('user')->get();
        
        return view('dashboard.destinasi.index', compact('destinations'));
    }


    //fungsi menampilkan form update
    public function edit($id){
        $destinations = destination::find($id);
        // return $destinations;
        return view('dashboard.destinasi.edit', compact('destinations'));
    }

    //funsi untuk update data
    public function update($id,Request $request){
        destination::where('id', $id)->update([
            'name'=> $request->name,
            'address' => $request->address,
            'address_url' => $request->address_url,
            'description'=>$request->description,
        ]);
        return redirect()->route('dashboard.destinasi.index');
    }

    // proses delete data destinasi
    public function delete($id)
    {
        $destinations = destination::find($id);

        if (! $destinations) {
            return redirect()->route('dashboard.destinasi.index')->with('error', 'data tidak ditemukan');
        }

        $destinations->delete();
        return redirect()->route('dashboard.destinasi.index');
    }

    public function images($id){
        $images = image::where('type', 'destination')->where('parent_id', $id)->get();

        return view('dashboard.destinasi.images.index', compact('id', 'images'));
    }
    public function createImage($id)
    {
        return view('dashboard.destinasi.images.create', compact('id'));
    }

    public function storeImage($id, Request $request)
    {
        $rules = [
            'berkas' => ['required'],
        ];

        $messages = [
            'berkas.required' => 'Berkas tidak boleh kosong'
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->route('dashboard.destinasi.images.create', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $file = $request->file('berkas');
        $name = $file->hashName();

        Storage::disk('public')->put('tourismimages', $file);

        Image::create([
            'type' => 'destination',
            'parent_id' => $id,
            'path' => $name,
        ]);

        return redirect()->route('dashboard.destinasi.images.index', $id);
    }



}
