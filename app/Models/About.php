<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
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

    //about update
    public static function aboutUpdate($request, $id)
    {
        self::$person = About::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$person->image))
            {
                unlink(self::$person->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$person->image;
        }
        self::$person->about    = $request->about;
        self::$person->name     = $request->name;
        self::$person->dob      = $request->dob;
        self::$person->address  = $request->address;
        self::$person->email    = $request->email;
        self::$person->zip      = $request->zip;
        self::$person->phone    = $request->phone;
        self::$person->project  = $request->project;
        self::$person->url      = $request->url;
        self::$person->image    = self::$imageUrl;
        self::$person->save();
    }

    //status update
    public static function updateAboutStatus($id)
    {
        self::$person = About::find($id);
        if (self::$person->status == 1 )
        {
            self::$person->status = 0;
            self::$message = 'About status info unpublished successfully.';
        }
        else
        {
            self::$person->status = 1;
            self::$message = 'About status info published successfully.';
        }
        self::$person->save();
        return self::$message;
    }

    //about delete
    public static function aboutDelete($id)
    {
        self::$person = About::find($id);
        if (file_exists(self::$person->image))
        {
            unlink(self::$person->image);
        }
        self::$person->delete();
    }

}
