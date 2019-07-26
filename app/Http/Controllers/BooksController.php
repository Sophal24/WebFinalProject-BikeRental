<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
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
    }
}
