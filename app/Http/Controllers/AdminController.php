<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Icon;
use App\Menu;
use App\Portfolio;
use Intervention\Image\Facades\Image;
use Storage;
use File;

class AdminController extends Controller
{
    const UPLOAD_PATH = '/uploads/';
    public function index()
    {
        //$ser = Service::all();
        //return view('admin.index', compact('ser'));
        return view('admin.index');
    }

    public function add_icons(Request $request)
    {
        $this->validate(request(), [
            'image' => 'required'
        ]);
        $icon = new Icon;
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath = $imageName;
        $icon->image = $fullImagePath;
        $icon->save();
        session()->flash('message', 'Icon Added!');
        return redirect('/admin/add-icons');
    }
}