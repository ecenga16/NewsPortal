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
}
