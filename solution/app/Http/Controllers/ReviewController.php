<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Sentiment\Analyzer;
class ReviewController extends Controller
{
    public $data= [];

    public function __construct() {
        self::printData();

    }

    public function loadData($dataname)
    {
        $path = "C:\Users\Andrej\Desktop\DEV\WEB-desing\GYMBEAM-Case Study\solution\public/";
        $file = fopen($path . $dataname, "r");

        while (! feof($file))
        {
             $arr = fgetcsv($file);
           // print_r($arr);
           if ($arr == false) {
            return;
           }
           array_push($this->data, array('name' => $arr[0],'desc' => $arr[1], 'rating' => '0.0'));
        }
        fclose($file);
        return;
    }

    public function printData() {
        $this->loadData("gymbeamData.csv");
       // print_r($this->data);
        $this->rateData();
    }

    protected function rateData() {
        $analyzer = new Analyzer(); 

        for ($i=1; $i < sizeof($this->data)  ; $i++) { 
            $ratingArr = $analyzer->getSentiment($this->data[$i]['desc']);
            $this->data[$i]['rating'] = $ratingArr['compound'];
           // echo ("arr id: " . $i. " name: " . $this->data[$i]['name'] .  " rating: " . $this->data[$i]['rating'] . "<br>");
        }
        $this->sortData();
    }

    public function sortData()
    {
        
    }


}
