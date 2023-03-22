<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $person, $image, $imageName, $imageUrl, $extension, $directory;

    public static function getImageUrl($request)
    {
        self::$image= $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'about_image/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function personAbout($request)
    {
        self::$person = new About();
        self::$person->about    = $request->about;
        self::$person->name     = $request->name;
        self::$person->dob      = $request->dob;
        self::$person->address  = $request->address;
        self::$person->email    = $request->email;
        self::$person->zip      = $request->zip;
        self::$person->phone    = $request->phone;
        self::$person->project  = $request->project;
        self::$person->url      = $request->url;
        self::$person->image    = self::getImageUrl($request);
        self::$person->save();
    }
}
