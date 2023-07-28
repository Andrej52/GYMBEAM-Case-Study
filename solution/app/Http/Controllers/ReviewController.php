<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //$sourcepath = __DIR__ . "/public/"
    public function  LoadData($dataname)
    {

        $file = fopen($dataname, "r");
        print_r(fgetcsv($file));
        if (empty(fclose($file))) {
            return 0;
        }
    }
}
