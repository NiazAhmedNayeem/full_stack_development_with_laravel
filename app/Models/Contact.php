<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    private static $person, $message;

    public static function personContact($request)
    {
        self::$person = new Contact();
        self::$person->caption = $request->caption;
        self::$person->title = $request->title;
        self::$person->title_detail = $request->title_detail;
        self::$person->email = $request->email;
        self::$person->phone = $request->phone;
        self::$person->facebook = $request->facebook;
        self::$person->twitter = $request->twitter;
        self::$person->instagram = $request->instagram;
        self::$person->save();
    }
}
