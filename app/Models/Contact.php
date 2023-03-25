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

    public static function contactStatus($id)
    {
        self::$person = Contact::find($id);
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
    }

    public static function contactDelete($id)
    {
        self::$person = Contact::find($id);
        self::$person->delete();
    }

}
