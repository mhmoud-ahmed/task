<?php

namespace App\http\traits;

trait media
{
    public function uploadPhoto($image, $folder)
    {
        $photoName = uniqid() . '.' . $image->extension();
        $image->move(public_path('dist/img/' . $folder), $photoName);
    }
    public function deletePhoto($photoPath)
    {
        if(file_exists($photoPath)){
            unlink($photoPath);
            return true;
        }else {
            return false;
        }
    }
}
