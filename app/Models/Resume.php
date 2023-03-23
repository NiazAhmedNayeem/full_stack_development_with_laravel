<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    private static $person, $message;

    public static function personResume($request)
    {
        self::$person = new Resume();
        self::$person->res = $request->res;
        self::$person->passyr = $request->passyr;
        self::$person->department = $request->department;
        self::$person->major = $request->major;
        self::$person->institute = $request->institute;
        self::$person->save();
    }

    public static function updateResume($request, $id)
    {
        self::$person = Resume::find($id);
        self::$person->res = $request->res;
        self::$person->passyr = $request->passyr;
        self::$person->department = $request->department;
        self::$person->major = $request->major;
        self::$person->institute = $request->institute;
        self::$person->save();
    }

    public static function updateResumeStatus($id)
    {
        self::$person = Resume::find($id);
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
    }

}
