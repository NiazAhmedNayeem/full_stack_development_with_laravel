<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $person, $image, $imageName, $imageUrl, $extension, $directory, $message;

    public static function getImageUrl($request)
    {
        self::$image= $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'about_image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function personProject($request)
    {
        self::$person = new Project();
        self::$person->name         = $request->name;
        self::$person->language1    = $request->language1;
        self::$person->language2    = $request->language2;
        self::$person->language3    = $request->language3;
        self::$person->language4    = $request->language4;
        self::$person->language5    = $request->language5;
        self::$person->url          = $request->url;
        self::$person->image        = self::getImageUrl($request);
        self::$person->save();
    }
}
