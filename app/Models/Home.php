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

    public static function homeUpdate($request, $id)
    {
        self::$person = Home::find($id);
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

        if ($request->file('audio'))
        {
            if (file_exists(self::$person->audio))
            {
                unlink(self::$person->audio);
            }
            self::$audioUrl = self::getAudioUrl($request);
        }
        else
        {
            self::$audioUrl = self::$person->audio;
        }
        self::$person->name = $request->name;
        self::$person->title1 = $request->title1;
        self::$person->title2 = $request->title2;
        self::$person->image = self::$imageUrl;
        self::$person->audio = self::$audioUrl;
        self::$person->save();
    }

    public static function statusUpdate($id)
    {
        self::$person = Home::find($id);
        if (self::$person->status == 1)
        {
            self::$person->status = 0;
            self::$message = 'Home status info unpublished successfully.';
        }
        else
        {
            self::$person->status = 1;
            self::$message = 'Home status info published successfully.';
        }
        self::$person->save();
        return self::$message;
    }

    public static function personDelete($id)
    {
        self::$person = Home::find($id);
        if (file_exists(self::$person->image))
        {
            unlink(self::$person->image);
        }
        if (file_exists(self::$person->audio))
        {
            unlink(self::$person->audio);
        }
        self::$person->delete();
    }
}
