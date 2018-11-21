<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\galleryModel;
use Illuminate\Support\Facades\Storage;

class Gallery extends Controller
{
    public function index()
    {
    	$galleries = galleryModel::all();
    	return view('galleries/index', compact('galleries'));
    }

    public function create()
    {
    	return view('galleries/create');
    }

    public function store(Request $request)
    {
    	 $image = $request->file('image');

    	 $nombre = $image->getClientOriginalName();

    	 $gallery = new galleryModel;

        $gallery->image = $nombre;

        $gallery->save();

    	 \Storage::disk('public')->put($nombre,  \File::get($image));

        return redirect('/galleries');
    }

    public function edit(galleryModel $data)
    {
    	return view('galleries/edit', compact('data'));
    }

    public function upgrade(Request $request)
    {
    	$data = $request->all();

    	$image = $request->file('image');

    	$nombre = $image->getClientOriginalName();
        
        \Storage::disk('public')->delete($data['image']->getClientOriginalName());

    	\Storage::disk('public')->put($nombre,  \File::get($image));

       	galleryModel::where('gallery_id', $data['galleryid'])
    				->update([
                        'image' => $nombre
                    ]);   
		return redirect('/galleries'); 
    }

    public function destroy(galleryModel $data)
    {
        
        Storage::disk('public')->delete($data['image']);

    	galleryModel::where('gallery_id', $data['gallery_id'])->delete();

    	return redirect('galleries/');

    }
}
