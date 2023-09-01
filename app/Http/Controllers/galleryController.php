<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class galleryController extends Controller
{
    public function index(){
        return view('gallery.index');
    }

    public function SaveImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'GalleryPicture' => 'required|image|mimes:jpeg,png,jpg,PNG|max:10000',
            'GuestName' => 'required',
            'Country' => 'required',
            'Year' => 'required',
        ],[
            'GalleryPicture.required' => 'Picture is required.',
            'GalleryPicture.image' => 'The selected file must be an image.',
            'GalleryPicture.mimes' => 'Picture must be a JPEG, PNG, or JPG.',
            'GalleryPicture.max' => 'Picture may not be larger than 10MB.',
            'GuestName.required' => 'The guest name is required.',
            'Country.required' => 'The country is required.',
            'Year.required' => 'The year is required.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $file = $request->file('GalleryPicture');

            if ($request->hasFile('GalleryPicture')) {
                $file = $request->file('GalleryPicture');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('../public/jitImage/Gallery', $filename);

                $image = new Gallery();
                $image->GuestName = $request->input('GuestName');
                $image->country = $request->input('Country');
                $image->year = $request->input('Year');
                $image->GalleryPicture = $filename;
            }
            $image->save();
            return response()->json([
                'status' => 200,
                'message' => 'Image saved successfully.',
            ]);
        }
    }

    public function GetImage()
    {
        $GalleryImage =DB::table('galleries')
        ->select('*')
        ->get();
        return ($GalleryImage);
    }

    public function deleteImage($id)
    {
        $GalleryImage =DB::table('galleries')
        ->select('GalleryPicture')
        ->where('id',$id)
        ->get();

        $image = $GalleryImage[0]->GalleryPicture;

        $image_path = '../public/jitImage/Gallery/'.$image;
        if(File::exists($image_path)) {
            File::delete($image_path);

            Gallery::where([
                'id' => $id,
            ])->delete();
        }

        return response()->json([
            'success' => 'Image Deleted!'
        ]);
    }

}
