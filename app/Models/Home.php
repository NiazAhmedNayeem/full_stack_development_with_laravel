<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    private  static $person, $image, $imageName, $imageUrl, $extension, $directory,
        $audio, $audioName, $audioUrl, $message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'home_image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function getAudioUrl($request)
    {
        self::$audio = $request->file('audio');
        self::$extension = self::$audio->getClientOriginalExtension();
        self::$audioName = time().'.'.self::$extension;
        self::$directory = 'home_audio/';
        self::$audio->move(self::$directory, self::$audioName);
        return self::$directory.self::$audioName;
    }


    public static function createHome($request)
    {
        self::$person = new Home();
        self::$person->name = $request->name;
        self::$person->title1 = $request->title1;
        self::$person->title2 = $request->title2;
        self::$person->image = self::getImageUrl($request);
        self::$person->audio = self::getAudioUrl($request);
        self::$person->save();
    }
}
