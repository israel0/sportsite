<?php

namespace App\Helper;

use App\Models\Notification;
use App\Models\User;
use App\Mail\SendNotification;
use Illuminate\Support\Facades\Mail;

class Helper
{

    public static function ReadNotification()
    {
        return Notification::where("status", 0)->update([
            "status" => 1
        ]);
    }

    public static function validatePin($pin)
    {
        $pattern = "/^\d{4}$/";
        // Perform the regex match
        return preg_match($pattern, $pin) === 1;
    }

    public static function Redirection($action, String $name, String $message)
    {
        if (!$action) {
            return redirect()->route($name)->with("error", "Operation Failed!");
        }
        return redirect()->route($name)->with("success", $message);
    }


    public static function EmailAlert($user)
    {
        $notification = new Notification();
        $notification->notification = "Welcome to Nukam Sports Foundation. Your account has been created successfully and you can now have full access to your dashboard to complete your application.";
        $notification->status = 0;
        $notification->title = "Welcome to Nukam Sports!";
        $notification->name = $user->name;
        $notification->save();

        rescue(
            function () use ($user, $notification) {
                return Self::Notifications($user->name, $user->email, $notification->notification);
            },
            function ($e) {
                return '';
            }
        );
    }

    public static function Notifications($name, $email, $message)
    {
        $data = array("name" => $name, "message" => $message);
        Mail::to($email)->send(new SendNotification($data));
    }
}
