<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    public function uploadImage(){
        $file = Input::file('file');
        if ($file!=null) {

            $ext = $file->getClientOriginalExtension();
            $image_name = str_random(15).'.'.$ext;
        }

        if (!file_exists(public_path().'/uploads/images')) {
            mkdir(public_path().'/uploads/images');
        }

        Image::make(Input::file('file'))->save(public_path().'/uploads/images/'.$image_name);

        return Response::json([ 'success' => true ]);
    }
}
