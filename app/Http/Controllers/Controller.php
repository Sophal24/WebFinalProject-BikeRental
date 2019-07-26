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

    	$data = array('name'=>$name,'phonenumber'=>$phonenumber,'idNumber'=>$idNumber,'destination'=>$destination,'bikeType'=>$bikeType,'startDate'=>$startDate,'endDate'=>$endDate);

    	DB::table('book')->insert($data);

    	echo "Insert Success !";
    	
    }
}
