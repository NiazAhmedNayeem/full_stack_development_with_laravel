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
        self::$directory = 'project_image/';
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

    public static function updateProjectStatus($id)
    {
        self::$person = Project::find($id);
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
}
