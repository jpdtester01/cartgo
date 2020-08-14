<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use Validator;

class HomeEditController extends Controller
{
	public function index(Request $req){
		
		if( $req->session()->has('id') ){
			
			$getData = DB::table('tbl_prod_details')->orderBy('created_date','desc')->get();
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData = DB::table('tbl_prod_visits')
						-> leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						-> where('tbl_prod_visits.userid', $req->session()->get('id'))
						-> get();
			
			$trendProd = DB::table('tbl_prod_visits')
					  -> leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
					  -> groupBy('tbl_prod_visits.prod_id')
					  -> orderBy(DB::raw('count(tbl_prod_visits.prod_id)'),'desc')
					  -> get();
			
			$CartData  = DB::table('tbl_cart')
					  -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  -> where('tbl_cart.user_id',$req->session()->get('id'))
					  -> get();
			
			$CatGroup = DB::table('tbl_prod_details')
					 -> groupBy('prod_cat')
					 -> get();
					  
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('homeEdit',['prodData'=>$getData, 'userData'=>$userData, 'historyData'=>$historyData, 'trendProd'=>$trendProd, 'CartData'=>$CartData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData, 'CatGroup'=>$CatGroup]);
			
		}else{
			return redirect('/login');
			
		}
    }
	
	public function PostLogo(Request $req){
		
		if($req->hasFile('logoFile'))
		{
			$file = $req->file('logoFile');
			$file->move('img/header','logo.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function slider1Change(Request $req){
		
		if($req->hasFile('slider1File'))
		{
			$file = $req->file('slider1File');
			$file->move('img/slider','1.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function slider2Change(Request $req){
		
		if($req->hasFile('slider2File'))
		{
			$file = $req->file('slider2File');
			$file->move('img/slider','2.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function cat1Change(Request $req){
		
		if($req->hasFile('cat1File'))
		{
			$file = $req->file('cat1File');
			$file->move('img/offer','offer-1.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function cat2Change(Request $req){
		
		if($req->hasFile('cat2File'))
		{
			$file = $req->file('cat2File');
			$file->move('img/offer','offer-2.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function cat3Change(Request $req){
		
		if($req->hasFile('cat3File'))
		{
			$file = $req->file('cat3File');
			$file->move('img/offer','offer-3.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function cat4Change(Request $req){
		
		if($req->hasFile('cat4File'))
		{
			$file = $req->file('cat4File');
			$file->move('img/offer','offer-4.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function postcadChange(Request $req){
		
		if($req->hasFile('postcadFile'))
		{
			$file = $req->file('postcadFile');
			$file->move('img','magic.'.$file->getClientOriginalExtension());
			
			return redirect('/Admin/Home/Edit');
		}
    }
	
	public function SiteChange($element, $data, Request $req){
		
		$siteUpdate  = DB::table('tbl_sitedata')
					-> where('element', $element)
					-> update(['data'=>$data]);
    }
	
	public function SiteChanger(Request $req){
		
		$siteUpdate  = DB::table('tbl_sitedata')
					-> where('element', $req->element)
					-> update(['data'=> $req->data]);
    }
	
}
