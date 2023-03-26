<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    private static $person;

    public static function userFeedback($request)
    {
        self::$person = new Feedback();
        self::$person->name = $request->name;
        self::$person->email = $request->email;
        self::$person->subject = $request->subject;
        self::$person->message = $request->message;
        self::$person->save();
    }
    public static function feedbackDelete($id)
    {
        self::$person = Feedback::find($id);
        self::$person->delete();
    }
}
