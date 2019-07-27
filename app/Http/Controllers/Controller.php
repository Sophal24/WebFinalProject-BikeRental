<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function insert(Request $req){
    	$name = $req->input('name');
    	$phonenumber = $req->input('phonenumber');
    	$idNumber = $req->input('idNumber');
    	$destination = $req->input('destination');
    	$bikeType = $req->input('bikeType');
    	$startDate = $req->input('startDate');
    	$endDate = $req->input('endDate');

        $price = 0.0;
        $type = "tmp";
        if ($bikeType == "Normal Bike = 4$"){
            $type = "Normal Bike";
            $price = 4;
        }else if ($bikeType == "Mordern Bike = 8$"){
            $type = "Mordern Bike";
            $price = 8;
        }else if ($bikeType = "Normal Motorbike = 12$"){
            $type = "Normal Motorbike";
            $price = 12;
        }else{
            $type = "Off-Road Motorbike";
            $price = 16;
        }

    	$data = array('name'=>$name,'phonenumber'=>$phonenumber,'idNumber'=>$idNumber,'destination'=>$destination,'bikeType'=>$type,'price'=>$price,'startDate'=>$startDate,'endDate'=>$endDate);

    	DB::table('books')->insert($data);

        // echo "Insert Success !";
        return view('/successAlert',compact('successAlert'));
    	
    }
}
