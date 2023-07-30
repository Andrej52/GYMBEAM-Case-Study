<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Sentiment\Analyzer;
class ReviewController extends Controller
{
    public $data= [];  // array of data
    public $size = 0;
    public function __construct() {
        if(!$this->loadData("gymbeamData.csv"))
        {
            dd("file or path is incorrect");
        }
        if (empty($this->data)) {
           dd("Data are  is empty!");
        }

        array_shift($this->data);
        if ($_SERVER['REQUEST_URI'] == "/rated") {
            if ( $this->sortData()) {
                array_shift($this->data);
                array_pop($this->data);
                $this->size = sizeof($this->data);
            }
        }
    }

    // loading Data 
    public function loadData($dataname)
    {
        $path = dirname(__DIR__,3);
        $path= $path . "/public/";
        if (!file_exists($path. $dataname)) {
           return false;
        }
        $file = fopen($path . $dataname, "r");
        while (!feof($file))
        {
            $arr = fgetcsv($file);
            if ($arr) {
                array_push($this->data, array('name' => $arr[0],'desc' => $arr[1], 'rating' => '0.0'));
            }   
        }
        fclose($file);
        return true;

    }

    // rates Data by API analyzer from:
    protected function rateData() {
        $analyzer = new Analyzer(); 
        for ($i=0; $i < sizeof($this->data)  ; $i++) { 
            $ratingArr = $analyzer->getSentiment($this->data[$i]['desc']);
            $this->data[$i]['rating'] = $ratingArr['compound'];
        }
        return;
    }

    // sorts data
    public function sortData()
    {
        $columns = array_column($this->data, 'rating');
        if (array_multisort($columns, SORT_DESC, $this->data)) {
            return true;
        }
        return false;
    }
    
    // print  Products without best and worst in descending order
    public function printData($sorted) {
        for ($i=0; $i <sizeof($this->data) ; $i++) { 
            echo  '<div>
            <h3 class="productName">Product: ' . $this->data[$i]['name'] . '</h3>';
           if ($sorted) {
           echo' <p class="rating">with score of: ' . $this->data[$i]['rating'] . '</p>';
           };
            echo ' <article class="productDesc">
            Description: ' .$this->data[$i]['desc'] . '
            </article>
            </div>';
        }
    }
}
