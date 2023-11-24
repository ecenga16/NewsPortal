<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function GalleryAllImages() {
        
        $photo = Gallery::latest()->get();
        return view('backend.gallery.all_photos', compact('photo'));
    }

    public function AddImageGallery() {
        return view('backend.gallery.add_photo');
    }

    public function storeGalleryImages(Request $request) {
        $images = $request->file('multi_image');
    
        foreach ($images as $multi_img) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(784, 436)->save('upload/multi/' . $name_gen);
            $save_url = 'upload/multi/' . $name_gen;
    
            Gallery::insert([
                'photo_gallery' => $save_url,
                'post_date' => Carbon::now()->format('d F Y'),
            ]);
        }
    
        $notification = [
            'message' => 'Images inserted successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('all.photos')->with($notification);
    }

    public function EditImageGallery($id) {

        $image = Gallery::findorfail($id);

        return view('backend.gallery.edit_photo', compact('image'));
    }

    public function UpdatePhotoGallery(Request $request){
        $photo_id = $request->id;

        if ($request->file('multi_image')) {

    $image = $request->file('multi_image'); 
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    Image::make($image)->resize(784, 436)->save('upload/multi/' . $name_gen);
    $save_url = 'upload/multi/' . $name_gen;

        Gallery::findOrFail($photo_id)->update([
            'photo_gallery' => $save_url,
            'post_date' => Carbon::now()->format('d F Y'),

        ]); 

        $notification = array(
            'message' => 'Photo Gallery Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.photos')->with($notification); 

        } // End If 

    }

    public function DeleteImageGallery($id){

        $post_image = Gallery::findOrFail($id);
        $img = $post_image['photo_gallery'];
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'success'

        );
        return redirect()->back()->with($notification);

    }
}
