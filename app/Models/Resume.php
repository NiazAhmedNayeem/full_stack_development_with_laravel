<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    private static $person;

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

}
