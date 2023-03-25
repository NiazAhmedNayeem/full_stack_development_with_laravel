<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    private static $person, $message;

    public static function createFooter($request)
    {
        self::$person = new Footer();
        self::$person->anout = $request->about;
        self::$person->address = $request->address;
        self::$person->email = $request->email;
        self::$person->phone = $request->phone;
        self::$person->website = $request->website;
        self::$person->website_link = $request->website_link;
        self::$person->facebook = $request->facebook;
        self::$person->twitter = $request->twitter;
        self::$person->instagram = $request->instagram;
        self::$person->github = $request->github;
        self::$person->copyright = $request->copyright;
    }
}
