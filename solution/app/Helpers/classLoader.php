<?php
namespace App\Helpers;
use App\Http\Controllers\ReviewController;

class classLoader
{
    public static function controllerinstance()
    {
        return new ReviewController();
    }
}